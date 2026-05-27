<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\GetProductsRequestBuying_Mode;
use AdCP\MediaBuy\GetProductsRequest;
use AdCP\MediaBuy\GetProductsRequest_BrandReference;
use AdCP\MediaBuy\GetProductsRequest_Catalog;
use AdCP\MediaBuy\GetProductsRequestBuilder;
use PHPModelGenerator\Exception\ErrorRegistryException;
use PHPUnit\Framework\TestCase;

class AdCPGetProductsRequestTest extends TestCase
{
    public function testInstantiateWithMinimalValidData(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'Show me summer products',
        ]);

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
        $this->assertSame('Show me summer products', $req->getBrief());
    }

    public function testInstantiateWithEnumObject(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => GetProductsRequestBuying_Mode::Wholesale,
        ]);

        $this->assertSame(GetProductsRequestBuying_Mode::Wholesale, $req->getBuyingMode());
    }

    public function testThrowsOnMissingRequiredField(): void
    {
        $this->expectException(ErrorRegistryException::class);

        new GetProductsRequest(['adcp_version' => '3.1']);
    }

    public function testThrowsOnInvalidEnumValue(): void
    {
        $this->expectException(ErrorRegistryException::class);

        new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'nonexistent_mode',
        ]);
    }

    public function testPopulateUpdatesFields(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'initial brief',
        ]);

        $req->populate(['brief' => 'updated brief']);

        $this->assertSame('updated brief', $req->getBrief());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
    }

    public function testToArrayRoundTrip(): void
    {
        $input = [
            'adcp_version' => '3.1',
            'buying_mode' => 'refine',
            'refine' => [
                [
                    'scope' => 'request',
                    'ask' => 'more video options',
                ],
            ],
        ];

        $req = new GetProductsRequest($input);
        $output = $req->toArray();

        $this->assertSame('3.1', $output['adcp_version']);
        $this->assertSame('refine', $output['buying_mode']);
        $this->assertCount(1, $output['refine']);
        $this->assertSame('request', $output['refine'][0]['scope']);
        $this->assertSame('more video options', $output['refine'][0]['ask']);
    }

    public function testToJsonProducesValidJson(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'test brief',
        ]);

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame('3.1', $decoded['adcp_version']);
        $this->assertSame('brief', $decoded['buying_mode']);
    }

    public function testJsonSerialize(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'test brief',
        ]);

        $serialized = $req->jsonSerialize();
        $this->assertSame('3.1', $serialized['adcp_version']);
        $this->assertSame('brief', $serialized['buying_mode']);
    }

    public function testWithNestedBrand(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'brand campaign',
            'brand' => [
                'domain' => 'acme-corp.com',
                'brand_id' => 'tide',
            ],
        ]);

        $brand = $req->getBrand();
        $this->assertInstanceOf(GetProductsRequest_BrandReference::class, $brand);
        $this->assertSame('acme-corp.com', $brand->getDomain());
        $this->assertSame('tide', $brand->getBrandId());
    }

    public function testWithCatalog(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'catalog campaign',
            'brand' => [
                'domain' => 'acme-corp.com',
            ],
            'catalog' => [
                'catalog_id' => 'cat_123',
                'type' => 'product',
                'name' => 'Summer Products',
            ],
        ]);

        $catalog = $req->getCatalog();
        $this->assertInstanceOf(GetProductsRequest_Catalog::class, $catalog);
        $this->assertSame('cat_123', $catalog->getCatalogId());
    }

    public function testBuilderCreatesValidObject(): void
    {
        $builder = new GetProductsRequestBuilder();
        $req = $builder
            ->setAdcpVersion('3.1')
            ->setBuyingMode(GetProductsRequestBuying_Mode::Brief)
            ->setBrief('builder brief')
            ->validate();

        $this->assertInstanceOf(GetProductsRequest::class, $req);
        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
        $this->assertSame('builder brief', $req->getBrief());
    }

    public function testBuilderWithAllRequiredFields(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setBuyingMode('brief')
            ->setBrief('all fields')
            ->validate();

        $this->assertSame('all fields', $req->getBrief());
    }

    public function testBuilderThrowsOnMissingRequired(): void
    {
        $this->expectException(ErrorRegistryException::class);

        (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->validate();
    }

    public function testAdditionalPropertiesDefaultBehavior(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'test',
            'ext' => [
                'vendor_specific' => 'value',
            ],
        ]);

        $this->assertArrayHasKey('vendor_specific', $req->toArray()['ext'] ?? []);
    }
}
