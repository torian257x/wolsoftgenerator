<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\GetProductsRequestBuying_Mode;
use AdCP\MediaBuy\GetProductsRequest;
use AdCP\MediaBuy\GetProductsRequestBuilder;
use PHPUnit\Framework\TestCase;

class AdCPBuilderIntegrationTest extends TestCase
{
    public function testBuilderCallsManySettersThenToJsonIsConsistent(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setBuyingMode('brief')
            ->setBrief('Q2 campaign for summer products')
            ->setBrand([
                'domain' => 'acme-corp.com',
                'brand_id' => 'acme_summer',
            ])
            ->setPreferredDeliveryTypes(['guaranteed'])
            ->validate();

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
        $this->assertSame('Q2 campaign for summer products', $req->getBrief());
        $this->assertSame('acme-corp.com', $req->getBrand()->getDomain());
        $this->assertSame('acme_summer', $req->getBrand()->getBrandId());

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame('3.1', $decoded['adcp_version']);
        $this->assertSame('brief', $decoded['buying_mode']);
        $this->assertSame('Q2 campaign for summer products', $decoded['brief']);
        $this->assertSame('acme-corp.com', $decoded['brand']['domain']);
        $this->assertSame('acme_summer', $decoded['brand']['brand_id']);
        $this->assertSame('guaranteed', $decoded['preferred_delivery_types'][0]['value']);
    }

    public function testBuilderMinimalThenToArray(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setBuyingMode('brief')
            ->setBrief('Q2 campaign')
            ->validate();

        $array = $req->toArray();
        $this->assertSame('3.1', $array['adcp_version']);
        $this->assertSame('brief', $array['buying_mode']);
        $this->assertSame('Q2 campaign', $array['brief']);
    }

    public function testBuilderWithRefineThenToJson(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setBuyingMode('refine')
            ->setRefine([
                [
                    'scope' => 'request',
                    'ask' => 'show me more video options',
                ],
            ])
            ->validate();

        $this->assertSame(GetProductsRequestBuying_Mode::Refine, $req->getBuyingMode());

        $refine = $req->getRefine();
        $this->assertNotNull($refine);
        $this->assertCount(1, $refine);
        $this->assertSame('request', $refine[0]->getScope());
        $this->assertSame('show me more video options', $refine[0]->getAsk());

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame('refine', $decoded['buying_mode']);
        $this->assertCount(1, $decoded['refine']);
        $this->assertSame('request', $decoded['refine'][0]['scope']);
    }

    public function testGetProductsRequestConstructorToArrayDoesNotMutateOrigin(): void
    {
        $input = [
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'test',
        ];

        $req = new GetProductsRequest($input);
        $output = $req->toArray();

        $this->assertSame($input['adcp_version'], $output['adcp_version']);
        $this->assertSame($input['buying_mode'], $output['buying_mode']);
        $this->assertSame($input['brief'], $output['brief']);
    }
}
