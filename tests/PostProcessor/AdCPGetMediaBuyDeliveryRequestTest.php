<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\AttributionModel;
use AdCP\MediaBuy\Enums\GeographicTargetingLevel;
use AdCP\MediaBuy\Enums\MetroAreaSystem;
use AdCP\MediaBuy\Enums\MediaBuyStatus;
use AdCP\MediaBuy\Enums\ReportingFrequency;
use AdCP\MediaBuy\Enums\SortMetric;
use AdCP\MediaBuy\GetMediaBuyDeliveryRequest;
use AdCP\MediaBuy\GetMediaBuyDeliveryRequestBuilder;
use PHPModelGenerator\Exception\ErrorRegistryException;
use PHPUnit\Framework\TestCase;

class AdCPGetMediaBuyDeliveryRequestTest extends TestCase
{
    // =========================================================================
    // media_buy_ids — optional array with minItems: 1
    // =========================================================================

    public function testMinimalValid(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $this->assertSame(['mb_1'], $req->getMediaBuyIds());
    }

    public function testMultipleMediaBuyIds(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1', 'mb_2', 'mb_3'],
        ]);

        $this->assertSame(['mb_1', 'mb_2', 'mb_3'], $req->getMediaBuyIds());
    }

    public function testEmptyMediaBuyIdsThrows(): void
    {
        $this->expectException(ErrorRegistryException::class);
        new GetMediaBuyDeliveryRequest(['media_buy_ids' => []]);
    }

    public function testMediaBuyIdsOmitted(): void
    {
        $req = new GetMediaBuyDeliveryRequest([]);
        $this->assertNull($req->getMediaBuyIds());
    }

    // =========================================================================
    // Status Filter — oneOf: single MediaBuyStatus or array
    // =========================================================================

    public function testStatusFilterSingleString(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => 'active',
        ]);

        $this->assertInstanceOf(MediaBuyStatus::class, $req->getStatusFilter());
        $this->assertSame(MediaBuyStatus::Active, $req->getStatusFilter());
    }

    /**
     * Passing a UnitEnum object as status_filter matches both oneOf branches
     * (single value and array), which violates the "exactly one" constraint.
     * Use a string or an array for valid input.
     */
    public function testStatusFilterAsStringForSingleValue(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => 'paused',
        ]);

        $this->assertInstanceOf(MediaBuyStatus::class, $req->getStatusFilter());
        $this->assertSame(MediaBuyStatus::Paused, $req->getStatusFilter());
    }

    public function testStatusFilterArray(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => ['active', 'paused', 'completed'],
        ]);

        $filter = $req->getStatusFilter();
        $this->assertIsArray($filter);
        $this->assertCount(3, $filter);
        $this->assertContainsOnlyInstancesOf(MediaBuyStatus::class, $filter);
        $this->assertSame(MediaBuyStatus::Active, $filter[0]);
        $this->assertSame(MediaBuyStatus::Paused, $filter[1]);
        $this->assertSame(MediaBuyStatus::Completed, $filter[2]);
    }

    public function testStatusFilterAllSevenValues(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => [
                'pending_creatives',
                'pending_start',
                'active',
                'paused',
                'completed',
                'rejected',
                'canceled',
            ],
        ]);

        $filter = $req->getStatusFilter();
        $this->assertCount(7, $filter);
    }

    public function testStatusFilterInvalidValueThrows(): void
    {
        $this->expectException(ErrorRegistryException::class);
        new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => 'nonexistent_status',
        ]);
    }

    public function testStatusFilterOmitted(): void
    {
        $req = new GetMediaBuyDeliveryRequest(['media_buy_ids' => ['mb_1']]);
        $this->assertNull($req->getStatusFilter());
    }

    // =========================================================================
    // Time Granularity — ReportingFrequency enum
    // =========================================================================

    public function testTimeGranularityDaily(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'time_granularity' => 'daily',
        ]);

        $this->assertSame(ReportingFrequency::Daily, $req->getTimeGranularity());
    }

    public function testTimeGranularityEnumObject(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'time_granularity' => ReportingFrequency::Hourly,
        ]);

        $this->assertSame(ReportingFrequency::Hourly, $req->getTimeGranularity());
    }

    public function testTimeGranularityMonthly(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'time_granularity' => 'monthly',
        ]);

        $this->assertSame(ReportingFrequency::Monthly, $req->getTimeGranularity());
    }

    public function testTimeGranularityOmitted(): void
    {
        $req = new GetMediaBuyDeliveryRequest(['media_buy_ids' => ['mb_1']]);
        $this->assertNull($req->getTimeGranularity());
    }

    // =========================================================================
    // Date range — pattern validation YYYY-MM-DD
    // =========================================================================

    public function testStartAndEndDates(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'start_date' => '2026-01-01',
            'end_date' => '2026-01-31',
        ]);

        $this->assertSame('2026-01-01', $req->getStartDate());
        $this->assertSame('2026-01-31', $req->getEndDate());
    }

    public function testDatesOmitted(): void
    {
        $req = new GetMediaBuyDeliveryRequest(['media_buy_ids' => ['mb_1']]);
        $this->assertNull($req->getStartDate());
        $this->assertNull($req->getEndDate());
    }

    // =========================================================================
    // Boolean defaults — include_package_daily_breakdown, include_window_breakdown
    // =========================================================================

    public function testIncludeFlagsDefaultToFalse(): void
    {
        $req = new GetMediaBuyDeliveryRequest(['media_buy_ids' => ['mb_1']]);

        $this->assertFalse($req->getIncludePackageDailyBreakdown());
        $this->assertFalse($req->getIncludeWindowBreakdown());
    }

    public function testIncludeFlagsSetToTrue(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'include_package_daily_breakdown' => true,
            'include_window_breakdown' => true,
        ]);

        $this->assertTrue($req->getIncludePackageDailyBreakdown());
        $this->assertTrue($req->getIncludeWindowBreakdown());
    }

    // =========================================================================
    // Attribution Window — post_click, post_view Duration + model enum
    // =========================================================================

    public function testAttributionWindowWithBothDurations(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'attribution_window' => [
                'post_click' => ['interval' => 30, 'unit' => 'days'],
                'post_view' => ['interval' => 1, 'unit' => 'days'],
            ],
        ]);

        $window = $req->getAttributionWindow();
        $this->assertNotNull($window);

        $postClick = $window->getPostClick();
        $this->assertIsObject($postClick);
        $this->assertSame(30, $postClick->getInterval());

        $postView = $window->getPostView();
        $this->assertIsObject($postView);
        $this->assertSame(1, $postView->getInterval());
    }

    public function testAttributionWindowWithModel(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'attribution_window' => [
                'post_click' => ['interval' => 7, 'unit' => 'days'],
                'model' => 'last_touch',
            ],
        ]);

        $window = $req->getAttributionWindow();
        $this->assertInstanceOf(AttributionModel::class, $window->getModel());
        $this->assertSame(AttributionModel::LastTouch, $window->getModel());
    }

    // =========================================================================
    // Reporting Dimensions — geo, device_type, device_platform, audience, placement
    // =========================================================================

    public function testReportingDimensionsGeo(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'reporting_dimensions' => [
                'geo' => [
                    'geo_level' => 'country',
                    'limit' => 20,
                    'sort_by' => 'spend',
                ],
            ],
        ]);

        $dims = $req->getReportingDimensions();
        $this->assertNotNull($dims);

        $geo = $dims->getGeo();
        $this->assertNotNull($geo);
        $this->assertSame(GeographicTargetingLevel::Country, $geo->getGeoLevel());
        $this->assertSame(20, $geo->getLimit());
        $this->assertSame(SortMetric::Spend, $geo->getSortBy());
    }

    public function testReportingDimensionsGeoWithSystem(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'reporting_dimensions' => [
                'geo' => [
                    'geo_level' => 'metro',
                    'system' => 'nielsen_dma',
                    'limit' => 10,
                ],
            ],
        ]);

        $geo = $req->getReportingDimensions()->getGeo();
        $this->assertSame(MetroAreaSystem::NielsenDma, $geo->getSystem());
    }

    public function testReportingDimensionsDeviceType(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'reporting_dimensions' => [
                'device_type' => [
                    'limit' => 10,
                    'sort_by' => 'impressions',
                ],
            ],
        ]);

        $deviceType = $req->getReportingDimensions()->getDeviceType();
        $this->assertNotNull($deviceType);
        $this->assertSame(10, $deviceType->getLimit());
        $this->assertSame(SortMetric::Impressions, $deviceType->getSortBy());
    }

    public function testReportingDimensionsAllDimensions(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'reporting_dimensions' => [
                'geo' => [
                    'geo_level' => 'country',
                    'limit' => 50,
                    'sort_by' => 'spend',
                ],
                'device_type' => [
                    'limit' => 5,
                    'sort_by' => 'impressions',
                ],
                'device_platform' => [
                    'limit' => 5,
                    'sort_by' => 'clicks',
                ],
                'audience' => [
                    'limit' => 10,
                    'sort_by' => 'reach',
                ],
                'placement' => [
                    'limit' => 20,
                    'sort_by' => 'conversions',
                ],
            ],
        ]);

        $dims = $req->getReportingDimensions();
        $this->assertNotNull($dims->getGeo());
        $this->assertNotNull($dims->getDeviceType());
        $this->assertNotNull($dims->getDevicePlatform());
        $this->assertNotNull($dims->getAudience());
        $this->assertNotNull($dims->getPlacement());
    }

    // =========================================================================
    // Account Reference — oneOf: account_id vs brand+operator
    // =========================================================================

    public function testAccountByAccountId(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'account' => ['account_id' => 'acc_acme_001'],
        ]);

        $account = $req->getAccount();
        $this->assertNotNull($account);
        $this->assertSame('acc_acme_001', $account->getAccountId());
    }

    public function testAccountByBrandAndOperator(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'account' => [
                'brand' => ['domain' => 'acme-corp.com'],
                'operator' => 'acme-corp.com',
                'sandbox' => true,
            ],
        ]);

        $account = $req->getAccount();
        $this->assertNotNull($account);
        $this->assertNull($account->getAccountId());
        $this->assertSame('acme-corp.com', $account->getOperator());
        $this->assertTrue($account->getSandbox());
    }

    public function testAccountWithBrandIdAndOperator(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'account' => [
                'brand' => [
                    'domain' => 'nova-brands.com',
                    'brand_id' => 'spark',
                ],
                'operator' => 'pinnacle-media.com',
            ],
        ]);

        $account = $req->getAccount();
        $brand = $account->getBrand();
        $this->assertNotNull($brand);
        $this->assertSame('nova-brands.com', $brand->getDomain());
        $this->assertSame('spark', $brand->getBrandId());
        $this->assertSame('pinnacle-media.com', $account->getOperator());
    }

    // =========================================================================
    // Complex payload — full realistic request
    // =========================================================================

    public function testFullRealisticPayload(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'adcp_version' => '3.1',
            'media_buy_ids' => ['mb_001', 'mb_002', 'mb_003'],
            'status_filter' => ['active', 'paused'],
            'start_date' => '2026-04-01',
            'end_date' => '2026-04-30',
            'time_granularity' => 'daily',
            'include_package_daily_breakdown' => true,
            'include_window_breakdown' => true,
            'attribution_window' => [
                'post_click' => ['interval' => 30, 'unit' => 'days'],
                'post_view' => ['interval' => 1, 'unit' => 'days'],
                'model' => 'last_touch',
            ],
            'reporting_dimensions' => [
                'geo' => [
                    'geo_level' => 'country',
                    'limit' => 50,
                    'sort_by' => 'spend',
                ],
                'device_type' => [
                    'limit' => 10,
                    'sort_by' => 'impressions',
                ],
            ],
            'account' => [
                'account_id' => 'acc_acme_001',
            ],
        ]);

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(['mb_001', 'mb_002', 'mb_003'], $req->getMediaBuyIds());
        $this->assertSame(ReportingFrequency::Daily, $req->getTimeGranularity());
        $this->assertTrue($req->getIncludePackageDailyBreakdown());
        $this->assertTrue($req->getIncludeWindowBreakdown());

        $attribution = $req->getAttributionWindow();
        $this->assertNotNull($attribution);
        $this->assertSame(30, $attribution->getPostClick()->getInterval());

        $dims = $req->getReportingDimensions();
        $this->assertNotNull($dims->getGeo());
        $this->assertNotNull($dims->getDeviceType());

        $this->assertSame('acc_acme_001', $req->getAccount()->getAccountId());
    }

    // =========================================================================
    // Serialization round-trip
    // =========================================================================

    public function testToArrayRoundTrip(): void
    {
        $input = [
            'media_buy_ids' => ['mb_1', 'mb_2'],
            'time_granularity' => 'daily',
            'include_package_daily_breakdown' => true,
            'status_filter' => ['active'],
            'attribution_window' => [
                'post_click' => ['interval' => 30, 'unit' => 'days'],
            ],
        ];

        $req = new GetMediaBuyDeliveryRequest($input);
        $output = $req->toArray();

        $this->assertSame(['mb_1', 'mb_2'], $output['media_buy_ids']);
        $this->assertSame('daily', $output['time_granularity']);
        $this->assertTrue($output['include_package_daily_breakdown']);
        $this->assertSame('active', $output['status_filter'][0]['value']);
        $this->assertSame(30, $output['attribution_window']['post_click']['interval']);
    }

    public function testToJsonRoundTrip(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'include_window_breakdown' => true,
        ]);

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame(['mb_1'], $decoded['media_buy_ids']);
        $this->assertTrue($decoded['include_window_breakdown']);
    }

    public function testJsonSerialize(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $serialized = $req->jsonSerialize();
        $this->assertIsArray($serialized);
        $this->assertSame(['mb_1'], $serialized['media_buy_ids']);
    }

    public function testToArrayWithAccountByBrand(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'account' => [
                'brand' => ['domain' => 'acme-corp.com', 'brand_id' => 'tide'],
                'operator' => 'acme-corp.com',
            ],
        ]);

        $output = $req->toArray();
        $this->assertSame('acme-corp.com', $output['account']['brand']['domain']);
        $this->assertSame('tide', $output['account']['brand']['brand_id']);
        $this->assertSame('acme-corp.com', $output['account']['operator']);
    }

    // =========================================================================
    // Builder
    // =========================================================================

    public function testBuilderMinimal(): void
    {
        $req = (new GetMediaBuyDeliveryRequestBuilder())
            ->setMediaBuyIds(['mb_1'])
            ->validate();

        $this->assertSame(['mb_1'], $req->getMediaBuyIds());
    }

    public function testBuilderFull(): void
    {
        $req = (new GetMediaBuyDeliveryRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setMediaBuyIds(['mb_1'])
            ->setStatusFilter(['active', 'paused'])
            ->setStartDate('2026-01-01')
            ->setEndDate('2026-03-31')
            ->setTimeGranularity(ReportingFrequency::Daily)
            ->setIncludePackageDailyBreakdown(true)
            ->setIncludeWindowBreakdown(true)
            ->setAttributionWindow([
                'post_click' => ['interval' => 30, 'unit' => 'days'],
                'model' => 'last_touch',
            ])
            ->setAccount(['account_id' => 'acc_001'])
            ->validate();

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(['mb_1'], $req->getMediaBuyIds());
        $this->assertSame(ReportingFrequency::Daily, $req->getTimeGranularity());
        $this->assertTrue($req->getIncludePackageDailyBreakdown());
        $this->assertTrue($req->getIncludeWindowBreakdown());
        $this->assertSame('acc_001', $req->getAccount()->getAccountId());
    }

    public function testBuilderDefaults(): void
    {
        $req = (new GetMediaBuyDeliveryRequestBuilder())
            ->setMediaBuyIds(['mb_1'])
            ->validate();

        $this->assertFalse($req->getIncludePackageDailyBreakdown());
        $this->assertFalse($req->getIncludeWindowBreakdown());
    }

    // =========================================================================
    // Populate
    // =========================================================================

    public function testPopulateUpdatesMediaBuyIds(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $req->populate(['media_buy_ids' => ['mb_1', 'mb_2']]);

        $this->assertSame(['mb_1', 'mb_2'], $req->getMediaBuyIds());
    }

    public function testPopulateUpdatesIncludeFlags(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $this->assertFalse($req->getIncludePackageDailyBreakdown());
        $req->populate(['include_package_daily_breakdown' => true]);
        $this->assertTrue($req->getIncludePackageDailyBreakdown());
    }

    public function testPopulateRejectsInvalidStatusFilter(): void
    {
        $this->expectException(ErrorRegistryException::class);

        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $req->populate(['status_filter' => 'invalid_status']);
    }

    // =========================================================================
    // Ext and Context
    // =========================================================================

    public function testExtWithVendorData(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'ext' => ['vendor_key' => 'vendor_value'],
        ]);

        $ext = $req->getExt();
        $this->assertNotNull($ext);
        $this->assertArrayHasKey('vendor_key', $ext->toArray());
    }

    // =========================================================================
    // AdCP Version Envelope
    // =========================================================================

    public function testAdcpMajorVersion(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'adcp_major_version' => 3,
        ]);

        $this->assertSame(3, $req->getAdcpMajorVersion());
    }

    public function testAdcpVersionBeta(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'adcp_version' => '3.1-beta',
        ]);

        $this->assertSame('3.1-beta', $req->getAdcpVersion());
    }
}
