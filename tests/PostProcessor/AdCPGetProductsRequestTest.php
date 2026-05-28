<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\CatalogType;
use AdCP\MediaBuy\Enums\DeliveryType;
use AdCP\MediaBuy\Enums\DigitalSourceType;
use AdCP\MediaBuy\Enums\DisclosurePersistence;
use AdCP\MediaBuy\Enums\DisclosurePosition;
use AdCP\MediaBuy\Enums\EventType;
use AdCP\MediaBuy\Enums\Exclusivity;
use AdCP\MediaBuy\Enums\FeedFormat;
use AdCP\MediaBuy\Enums\GetProductsRequestBuying_Mode;
use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;
use AdCP\MediaBuy\Enums\GetProductsRequest_DurationUnit;
use AdCP\MediaBuy\Enums\GetProductsRequestItemOfArrayFields;
use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;
use AdCP\MediaBuy\Enums\MediaChannel;
use AdCP\MediaBuy\Enums\UpdateFrequency;
use AdCP\MediaBuy\GetProductsRequest;
use AdCP\MediaBuy\GetProductsRequest_BrandReference;
use AdCP\MediaBuy\GetProductsRequest_Catalog;
use AdCP\MediaBuy\GetProductsRequestBuilder;
use PHPModelGenerator\Exception\ErrorRegistryException;
use PHPUnit\Framework\TestCase;

class AdCPGetProductsRequestTest extends TestCase
{
    // =========================================================================
    // Buying Mode — all three enum values, string and object forms
    // =========================================================================

    public function testBriefModeWithMinimalData(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'Show me summer products for Q2',
        ]);

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
        $this->assertSame('Show me summer products for Q2', $req->getBrief());
    }

    public function testWholesaleMode(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'wholesale',
        ]);

        $this->assertSame(GetProductsRequestBuying_Mode::Wholesale, $req->getBuyingMode());
        $this->assertNull($req->getBrief());
    }

    public function testRefineMode(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                ['scope' => 'request', 'ask' => 'more video options'],
            ],
        ]);

        $this->assertSame(GetProductsRequestBuying_Mode::Refine, $req->getBuyingMode());
        $refine = $req->getRefine();
        $this->assertCount(1, $refine);
        $this->assertSame('request', $refine[0]->getScope());
        $this->assertSame('more video options', $refine[0]->getAsk());
    }

    public function testBuyingModeEnumObjectValues(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => GetProductsRequestBuying_Mode::Brief,
            'brief' => 'test',
        ]);
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());

        $req2 = new GetProductsRequest([
            'buying_mode' => GetProductsRequestBuying_Mode::Wholesale,
        ]);
        $this->assertSame(GetProductsRequestBuying_Mode::Wholesale, $req2->getBuyingMode());

        $req3 = new GetProductsRequest([
            'buying_mode' => GetProductsRequestBuying_Mode::Refine,
            'refine' => [
                ['scope' => 'request', 'ask' => 'more video'],
            ],
        ]);
        $this->assertSame(GetProductsRequestBuying_Mode::Refine, $req3->getBuyingMode());
    }

    public function testInvalidBuyingModeStringThrows(): void
    {
        $this->expectException(ErrorRegistryException::class);
        new GetProductsRequest([
            'buying_mode' => 'nonexistent_mode',
        ]);
    }

    public function testMissingBuyingModeThrows(): void
    {
        $this->expectException(ErrorRegistryException::class);
        new GetProductsRequest(['adcp_version' => '3.1']);
    }

    // =========================================================================
    // Refine discriminator — oneOf scope branches
    // =========================================================================

    public function testRefineRequestScope(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                ['scope' => 'request', 'ask' => 'Suggest how to combine these products'],
            ],
        ]);

        $refine = $req->getRefine();
        $this->assertCount(1, $refine);
        $this->assertSame('request', $refine[0]->getScope());
        $this->assertSame('Suggest how to combine these products', $refine[0]->getAsk());
        $this->assertNull($refine[0]->getProductId());
        $this->assertNull($refine[0]->getProposalId());
    }

    public function testRefineProductScopeInclude(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                [
                    'scope' => 'product',
                    'product_id' => 'prod_123',
                    'action' => 'include',
                    'ask' => 'Add 16:9 format',
                ],
            ],
        ]);

        $refine = $req->getRefine();
        $this->assertCount(1, $refine);
        $this->assertSame('product', $refine[0]->getScope());
        $this->assertSame('prod_123', $refine[0]->getProductId());
        $action = $refine[0]->getAction();
        $this->assertInstanceOf(
            GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action::class,
            $action,
        );
        $this->assertSame('include', $action->value);
    }

    public function testRefineProductScopeOmit(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                [
                    'scope' => 'product',
                    'product_id' => 'prod_456',
                    'action' => 'omit',
                ],
            ],
        ]);

        $refine = $req->getRefine();
        $this->assertSame('product', $refine[0]->getScope());
        $this->assertSame('prod_456', $refine[0]->getProductId());
        $action = $refine[0]->getAction();
        $this->assertSame('omit', $action->value);
        $this->assertNull($refine[0]->getAsk());
    }

    public function testRefineProductScopeMoreLikeThis(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                [
                    'scope' => 'product',
                    'product_id' => 'prod_789',
                    'action' => 'more_like_this',
                    'ask' => 'Same audience but video format',
                ],
            ],
        ]);

        $refine = $req->getRefine();
        $action = $refine[0]->getAction();
        $this->assertSame('more_like_this', $action->value);
        $this->assertSame('Same audience but video format', $refine[0]->getAsk());
    }

    public function testRefineProposalScopeInclude(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                [
                    'scope' => 'proposal',
                    'proposal_id' => 'proposal_001',
                    'action' => 'include',
                    'ask' => 'Shift more budget toward video',
                ],
            ],
        ]);

        $refine = $req->getRefine();
        $this->assertSame('proposal', $refine[0]->getScope());
        $this->assertSame('proposal_001', $refine[0]->getProposalId());
        $this->assertSame('Shift more budget toward video', $refine[0]->getAsk());
    }

    public function testRefineWithMultipleEntriesMixedScopes(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                ['scope' => 'request', 'ask' => 'More video options and less display'],
                [
                    'scope' => 'product',
                    'product_id' => 'prod_001',
                    'action' => 'more_like_this',
                    'ask' => 'Similar products with higher CPM',
                ],
                [
                    'scope' => 'proposal',
                    'proposal_id' => 'proposal_003',
                    'action' => 'include',
                    'ask' => 'Reduce total by 10%',
                ],
            ],
        ]);

        $refine = $req->getRefine();
        $this->assertCount(3, $refine);
        $this->assertSame('request', $refine[0]->getScope());
        $this->assertSame('product', $refine[1]->getScope());
        $this->assertSame('proposal', $refine[2]->getScope());
    }

    public function testRefineAsEnumValueIsAccepted(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'refine',
            'refine' => [
                ['scope' => 'request', 'ask' => 'test'],
            ],
        ]);

        $this->assertNotNull($req->getRefine());
    }

    // =========================================================================
    // Brand — required domain, optional fields, brand_kit_override
    // =========================================================================

    public function testBrandWithDomainOnly(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
        ]);

        $brand = $req->getBrand();
        $this->assertInstanceOf(GetProductsRequest_BrandReference::class, $brand);
        $this->assertSame('acme-corp.com', $brand->getDomain());
        $this->assertNull($brand->getBrandId());
    }

    public function testBrandWithDomainAndBrandId(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => [
                'domain' => 'nova-brands.com',
                'brand_id' => 'tide',
            ],
        ]);

        $brand = $req->getBrand();
        $this->assertSame('nova-brands.com', $brand->getDomain());
        $this->assertSame('tide', $brand->getBrandId());
    }

    public function testBrandWithIndustries(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => [
                'domain' => 'acme-corp.com',
                'industries' => ['consumer_goods', 'food_and_beverage'],
            ],
        ]);

        $this->assertSame(
            ['consumer_goods', 'food_and_beverage'],
            $req->getBrand()->getIndustries(),
        );
    }

    public function testBrandWithDataSubjectContestationUrlOnly(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => [
                'domain' => 'acme-corp.com',
                'data_subject_contestation' => [
                    'url' => 'https://acme-corp.com/privacy/contest',
                ],
            ],
        ]);

        $contest = $req->getBrand()->getDataSubjectContestation();
        $this->assertNotNull($contest);
        $this->assertSame('https://acme-corp.com/privacy/contest', $contest->getUrl());
        $this->assertNull($contest->getEmail());
    }

    public function testBrandWithBrandKitOverrideLogo(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => [
                'domain' => 'acme-corp.com',
                'brand_kit_override' => [
                    'logo' => [
                        'asset_type' => 'image',
                        'url' => 'https://assets.acme-corp.com/logo.png',
                        'width' => 200,
                        'height' => 100,
                        'format' => 'png',
                        'alt_text' => 'Acme Corp logo',
                    ],
                    'colors' => [
                        'primary' => '#FF0000',
                        'secondary' => '#00FF00',
                    ],
                    'voice' => 'Professional and innovative',
                    'tagline' => 'Building tomorrow today',
                ],
            ],
        ]);

        $override = $req->getBrand()->getBrandKitOverride();
        $this->assertNotNull($override);
        $logo = $override->getLogo();
        $this->assertNotNull($logo);
        $this->assertSame('https://assets.acme-corp.com/logo.png', $logo->getUrl());
        $this->assertSame(200, $logo->getWidth());
        $this->assertSame(100, $logo->getHeight());
        $colors = $override->getColors();
        $this->assertNotNull($colors);
        $this->assertSame('#FF0000', $colors->getPrimary());
        $this->assertSame('#00FF00', $colors->getSecondary());
        $this->assertSame('Professional and innovative', $override->getVoice());
        $this->assertSame('Building tomorrow today', $override->getTagline());
    }

    public function testBrandMissingDomainThrows(): void
    {
        $this->expectException(ErrorRegistryException::class);
        new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['brand_id' => 'tide'],
        ]);
    }

    // =========================================================================
    // Catalog — type enum, feed_format, update_frequency, conversion_events
    // =========================================================================

    public function testCatalogWithAllBasicFields(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'catalog campaign',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => [
                'catalog_id' => 'cat_summer_2025',
                'name' => 'Summer Products 2025',
                'type' => 'product',
                'url' => 'https://feeds.acme-corp.com/products.xml',
                'feed_format' => 'google_merchant_center',
                'update_frequency' => 'daily',
            ],
        ]);

        $catalog = $req->getCatalog();
        $this->assertInstanceOf(GetProductsRequest_Catalog::class, $catalog);
        $this->assertSame('cat_summer_2025', $catalog->getCatalogId());
        $this->assertSame('Summer Products 2025', $catalog->getName());
        $this->assertSame(CatalogType::Product, $catalog->getType());
        $this->assertSame('https://feeds.acme-corp.com/products.xml', $catalog->getUrl());
        $this->assertSame(FeedFormat::GoogleMerchantCenter, $catalog->getFeedFormat());
        $this->assertSame(UpdateFrequency::Daily, $catalog->getUpdateFrequency());
    }

    public function testCatalogTypeAsString(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => ['type' => 'offering'],
        ]);

        $this->assertSame(CatalogType::Offering, $req->getCatalog()->getType());
    }

    public function testCatalogTypeAsEnumObject(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => ['type' => CatalogType::Hotel],
        ]);

        $this->assertSame(CatalogType::Hotel, $req->getCatalog()->getType());
    }

    public function testCatalogWithConversionEvents(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => [
                'catalog_id' => 'cat_001',
                'type' => 'product',
                'conversion_events' => ['purchase', 'add_to_cart'],
            ],
        ]);

        $events = $req->getCatalog()->getConversionEvents();
        $this->assertContainsOnlyInstancesOf(EventType::class, $events);
        $this->assertSame(EventType::Purchase, $events[0]);
        $this->assertSame(EventType::AddToCart, $events[1]);
    }

    public function testCatalogWithIdsAndGtins(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => [
                'catalog_id' => 'cat_002',
                'type' => 'product',
                'ids' => ['SKU001', 'SKU002', 'SKU003'],
                'gtins' => ['049000042566', '049000028473'],
                'tags' => ['summer', 'clearance'],
            ],
        ]);

        $catalog = $req->getCatalog();
        $this->assertSame(['SKU001', 'SKU002', 'SKU003'], $catalog->getIds());
        $this->assertSame(['049000042566', '049000028473'], $catalog->getGtins());
        $this->assertSame(['summer', 'clearance'], $catalog->getTags());
    }

    public function testCatalogWithCategoryAndQuery(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => [
                'catalog_id' => 'cat_003',
                'type' => 'product',
                'category' => 'beverages/soft-drinks',
                'query' => 'all pasta sauces under $5',
            ],
        ]);

        $catalog = $req->getCatalog();
        $this->assertSame('beverages/soft-drinks', $catalog->getCategory());
        $this->assertSame('all pasta sauces under $5', $catalog->getQuery());
    }

    public function testCatalogOfferingType(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => [
                'catalog_id' => 'cat_offering_1',
                'type' => 'offering',
                'items' => [
                    ['offering_id' => 'off_1', 'name' => 'Premium Banner'],
                    ['offering_id' => 'off_2', 'name' => 'Video Pre-roll'],
                ],
            ],
        ]);

        $catalog = $req->getCatalog();
        $this->assertSame(CatalogType::Offering, $catalog->getType());
        $items = $catalog->getItems();
        $this->assertCount(2, $items);
    }

    // =========================================================================
    // Account Reference — oneOf (account_id) vs (brand + operator)
    // =========================================================================

    public function testAccountByAccountId(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'account' => ['account_id' => 'acc_acme_001'],
        ]);

        $account = $req->getAccount();
        $this->assertNotNull($account);
        $this->assertSame('acc_acme_001', $account->getAccountId());
        $this->assertNull($account->getBrand());
        $this->assertNull($account->getOperator());
    }

    public function testAccountByBrandAndOperator(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'account' => [
                'brand' => [
                    'domain' => 'acme-corp.com',
                    'brand_id' => 'tide',
                ],
                'operator' => 'acme-corp.com',
                'sandbox' => true,
            ],
        ]);

        $account = $req->getAccount();
        $this->assertNotNull($account);
        $this->assertNull($account->getAccountId());
        $this->assertSame('acme-corp.com', $account->getOperator());
        $this->assertTrue($account->getSandbox());
        $brand = $account->getBrand();
        $this->assertNotNull($brand);
        $this->assertSame('acme-corp.com', $brand->getDomain());
        $this->assertSame('tide', $brand->getBrandId());
    }

    // =========================================================================
    // Preferred Delivery Types — single value or array
    // =========================================================================

    public function testPreferredDeliveryTypesAsArray(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'preferred_delivery_types' => ['guaranteed', 'non_guaranteed'],
        ]);

        $types = $req->getPreferredDeliveryTypes();
        $this->assertIsArray($types);
        $this->assertContainsOnlyInstancesOf(DeliveryType::class, $types);
    }

    public function testPreferredDeliveryTypesArrayWithOneElement(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'preferred_delivery_types' => ['guaranteed'],
        ]);

        $types = $req->getPreferredDeliveryTypes();
        $this->assertIsArray($types);
        $this->assertContainsOnlyInstancesOf(DeliveryType::class, $types);
        $this->assertSame(DeliveryType::Guaranteed, $types[0]);
    }

    // =========================================================================
    // Fields — single or array of field enums
    // =========================================================================

    public function testFieldsAsArray(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'fields' => ['product_id', 'name', 'description', 'pricing_options'],
        ]);

        $fields = $req->getFields();
        $this->assertIsArray($fields);
        $this->assertContainsOnlyInstancesOf(GetProductsRequestItemOfArrayFields::class, $fields);
    }

    public function testFieldsArrayWithOneElement(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'fields' => ['forecast'],
        ]);

        $fields = $req->getFields();
        $this->assertIsArray($fields);
        $this->assertContainsOnlyInstancesOf(GetProductsRequestItemOfArrayFields::class, $fields);
        $this->assertSame('forecast', $fields[0]->value);
    }

    // =========================================================================
    // Filters
    // =========================================================================

    public function testFiltersWithDeliveryTypeAndExclusivity(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'filters' => [
                'delivery_type' => 'guaranteed',
                'exclusivity' => 'exclusive',
            ],
        ]);

        $filters = $req->getFilters();
        $this->assertNotNull($filters);
        $this->assertSame(DeliveryType::Guaranteed, $filters->getDeliveryType());
        $this->assertSame(Exclusivity::Exclusive, $filters->getExclusivity());
    }

    public function testFiltersWithChannels(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'filters' => [
                'delivery_type' => 'non_guaranteed',
                'channels' => ['display', 'olv', 'ctv'],
            ],
        ]);

        $filters = $req->getFilters();
        $this->assertNotNull($filters);
        $channels = $filters->getChannels();
        $this->assertIsArray($channels);
        $this->assertContainsOnlyInstancesOf(MediaChannel::class, $channels);
    }

    // =========================================================================
    // Pagination
    // =========================================================================

    public function testPagination(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'pagination' => [
                'max_results' => 50,
                'cursor' => 'page_token_abc',
            ],
        ]);

        $pagination = $req->getPagination();
        $this->assertNotNull($pagination);
        $this->assertSame(50, $pagination->getMaxResults());
        $this->assertSame('page_token_abc', $pagination->getCursor());
    }

    // =========================================================================
    // Time Budget (Duration)
    // =========================================================================

    public function testTimeBudget(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'time_budget' => [
                'interval' => 30,
                'unit' => 'seconds',
            ],
        ]);

        $budget = $req->getTimeBudget();
        $this->assertIsObject($budget);
        $this->assertSame(30, $budget->getInterval());
        $this->assertSame(
            GetProductsRequest_DurationUnit::Seconds,
            $budget->getUnit(),
        );
    }

    // =========================================================================
    // Extension objects (ext, context)
    // =========================================================================

    public function testExtWithVendorSpecificData(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'ext' => [
                'gam' => ['line_item_id' => 'li_12345'],
                'vendor_specific' => 'value',
            ],
        ]);

        $ext = $req->getExt();
        $this->assertNotNull($ext);
        $array = $ext->toArray();
        $this->assertArrayHasKey('vendor_specific', $array);
        $this->assertSame('value', $array['vendor_specific']);
    }

    // =========================================================================
    // Serialization round-trips
    // =========================================================================

    public function testToArrayRoundTripWithComplexData(): void
    {
        $input = [
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'Q2 campaign for summer products across all brands',
            'brand' => [
                'domain' => 'nova-brands.com',
                'brand_id' => 'spark',
            ],
            'catalog' => [
                'catalog_id' => 'cat_002',
                'type' => 'product',
                'ids' => ['SKU001'],
                'tags' => ['summer'],
            ],
            'preferred_delivery_types' => ['guaranteed'],
            'pagination' => [
                'max_results' => 25,
            ],
            'fields' => ['product_id', 'name', 'forecast'],
        ];

        $req = new GetProductsRequest($input);
        $output = $req->toArray();

        $this->assertSame('3.1', $output['adcp_version']);
        $this->assertSame('brief', $output['buying_mode']);
        $this->assertSame('Q2 campaign for summer products across all brands', $output['brief']);
        $this->assertSame('nova-brands.com', $output['brand']['domain']);
        $this->assertSame('spark', $output['brand']['brand_id']);
        $this->assertSame('cat_002', $output['catalog']['catalog_id']);
        $this->assertSame('product', $output['catalog']['type']);
        $this->assertSame(['SKU001'], $output['catalog']['ids']);
        $this->assertSame('guaranteed', $output['preferred_delivery_types'][0]['value']);
        $this->assertSame(25, $output['pagination']['max_results']);
        $this->assertSame('product_id', $output['fields'][0]['value']);
        $this->assertSame('name', $output['fields'][1]['value']);
        $this->assertSame('forecast', $output['fields'][2]['value']);
    }

    public function testToJsonRoundTrip(): void
    {
        $req = new GetProductsRequest([
            'adcp_version' => '3.1',
            'buying_mode' => 'brief',
            'brief' => 'test brief',
            'brand' => ['domain' => 'acme-corp.com'],
            'catalog' => [
                'type' => 'offering',
                'catalog_id' => 'cat_off_1',
            ],
        ]);

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame('3.1', $decoded['adcp_version']);
        $this->assertSame('brief', $decoded['buying_mode']);
        $this->assertSame('acme-corp.com', $decoded['brand']['domain']);
        $this->assertSame('offering', $decoded['catalog']['type']);
    }

    public function testJsonSerializeReturnsArray(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
        ]);

        $serialized = $req->jsonSerialize();
        $this->assertIsArray($serialized);
        $this->assertSame('brief', $serialized['buying_mode']);
        $this->assertSame('test', $serialized['brief']);
    }

    // =========================================================================
    // Builder
    // =========================================================================

    public function testBuilderFullWorkflow(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setBuyingMode('brief')
            ->setBrief('Builder brief')
            ->setBrand(['domain' => 'acme-corp.com', 'brand_id' => 'tide'])
            ->setCatalog([
                'catalog_id' => 'cat_builder_1',
                'type' => 'product',
            ])
            ->setPreferredDeliveryTypes(['guaranteed'])
            ->setPagination(['max_results' => 100])
            ->validate();

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
        $this->assertSame('Builder brief', $req->getBrief());
        $this->assertSame('acme-corp.com', $req->getBrand()->getDomain());
        $this->assertSame('cat_builder_1', $req->getCatalog()->getCatalogId());
        $this->assertSame(100, $req->getPagination()->getMaxResults());
    }

    public function testBuilderWithBuyingModeEnum(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setBuyingMode(GetProductsRequestBuying_Mode::Refine)
            ->setRefine([['scope' => 'request', 'ask' => 'more video']])
            ->validate();

        $this->assertSame(GetProductsRequestBuying_Mode::Refine, $req->getBuyingMode());
    }

    public function testBuilderThrowsOnMissingBuyingMode(): void
    {
        $this->expectException(ErrorRegistryException::class);
        (new GetProductsRequestBuilder())
            ->setAdcpVersion('3.1')
            ->validate();
    }

    public function testBuilderWithExt(): void
    {
        $req = (new GetProductsRequestBuilder())
            ->setBuyingMode('brief')
            ->setBrief('test')
            ->setExt(['vendor_key' => 'vendor_value'])
            ->validate();

        $this->assertArrayHasKey('vendor_key', $req->getExt()->toArray());
    }

    // =========================================================================
    // Populate
    // =========================================================================

    public function testPopulateUpdatesExistingField(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'original brief',
        ]);

        $req->populate(['brief' => 'updated brief']);

        $this->assertSame('updated brief', $req->getBrief());
        $this->assertSame(GetProductsRequestBuying_Mode::Brief, $req->getBuyingMode());
    }

    public function testPopulateAddsNewField(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
        ]);

        $this->assertNull($req->getBrand());
        $req->populate(['brand' => ['domain' => 'acme-corp.com']]);

        $this->assertInstanceOf(GetProductsRequest_BrandReference::class, $req->getBrand());
        $this->assertSame('acme-corp.com', $req->getBrand()->getDomain());
    }

    public function testPopulateRejectsInvalidEnum(): void
    {
        $this->expectException(ErrorRegistryException::class);

        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
        ]);

        $req->populate(['buying_mode' => 'invalid_value']);
    }

    // =========================================================================
    // AdCP Version Envelope (allOf composition)
    // =========================================================================

    public function testAdcpMajorVersion(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'adcp_major_version' => 3,
        ]);

        $this->assertSame(3, $req->getAdcpMajorVersion());
    }

    public function testAdcpVersionPatternAcceptsBeta(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'adcp_version' => '3.1-beta',
        ]);

        $this->assertSame('3.1-beta', $req->getAdcpVersion());
    }

    public function testAdcpVersionPatternAcceptsRc(): void
    {
        $req = new GetProductsRequest([
            'buying_mode' => 'brief',
            'brief' => 'test',
            'adcp_version' => '3.1-rc.1',
        ]);

        $this->assertSame('3.1-rc.1', $req->getAdcpVersion());
    }

    // =========================================================================
    // toArray does not mutate origin
    // =========================================================================

    public function testConstructorDoesNotMutateInput(): void
    {
        $input = [
            'buying_mode' => 'refine',
            'refine' => [['scope' => 'request', 'ask' => 'more video']],
        ];
        $inputCopy = $input;

        new GetProductsRequest($input);
        $this->assertSame($inputCopy, $input);
    }
}
