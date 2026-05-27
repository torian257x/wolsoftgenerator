<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\MediaBuyStatus;
use AdCP\MediaBuy\Enums\ReportingFrequency;
use AdCP\MediaBuy\Enums\SortMetric;
use AdCP\MediaBuy\GetMediaBuyDeliveryRequest;
use AdCP\MediaBuy\GetMediaBuyDeliveryRequestBuilder;
use PHPUnit\Framework\TestCase;

class AdCPGetMediaBuyDeliveryRequestTest extends TestCase
{
    public function testInstantiateWithMediaBuyIds(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $this->assertSame(['mb_1'], $req->getMediaBuyIds());
    }

    public function testSetAndGetProperties(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1', 'mb_2'],
            'start_date' => '2026-01-01',
            'end_date' => '2026-01-31',
            'include_package_daily_breakdown' => true,
            'time_granularity' => 'daily',
            'include_window_breakdown' => true,
        ]);

        $this->assertSame(['mb_1', 'mb_2'], $req->getMediaBuyIds());
        $this->assertSame('2026-01-01', $req->getStartDate());
        $this->assertSame('2026-01-31', $req->getEndDate());
        $this->assertTrue($req->getIncludePackageDailyBreakdown());
        $this->assertSame(ReportingFrequency::Daily, $req->getTimeGranularity());
        $this->assertTrue($req->getIncludeWindowBreakdown());
    }

    public function testSetTimeGranularityWithEnumObject(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'time_granularity' => ReportingFrequency::Hourly,
        ]);

        $this->assertSame(ReportingFrequency::Hourly, $req->getTimeGranularity());
    }

    public function testSetStatusFilterReturnsEnums(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => ['active', 'paused'],
        ]);

        $filter = $req->getStatusFilter();
        $this->assertIsArray($filter);
        $this->assertContainsOnlyInstancesOf(MediaBuyStatus::class, $filter);
    }

    public function testSetInvalidStatusFilterThrows(): void
    {
        $this->expectException(\PHPModelGenerator\Exception\ErrorRegistryException::class);

        new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'status_filter' => 'invalid_status',
        ]);
    }

    public function testWithAttributionWindow(): void
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
        $this->assertNotNull($postClick);
        $this->assertSame(30, $postClick->getInterval());

        $postView = $window->getPostView();
        $this->assertNotNull($postView);
        $this->assertSame(1, $postView->getInterval());
    }

    public function testWithAccountById(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'account' => [
                'account_id' => 'acc_123',
            ],
        ]);

        $account = $req->getAccount();
        $this->assertNotNull($account);
        $this->assertSame('acc_123', $account->getAccountId());
    }

    public function testWithReportingDimensions(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'reporting_dimensions' => [
                'device_type' => ['limit' => 10, 'sort_by' => 'impressions'],
                'geo' => [
                    'geo_level' => 'country',
                    'limit' => 20,
                    'sort_by' => 'spend',
                ],
            ],
        ]);

        $dims = $req->getReportingDimensions();
        $this->assertNotNull($dims);

        $deviceType = $dims->getDeviceType();
        $this->assertNotNull($deviceType);
        $this->assertSame(10, $deviceType->getLimit());
        $this->assertSame(SortMetric::Impressions, $deviceType->getSortBy());

        $geo = $dims->getGeo();
        $this->assertNotNull($geo);
        $this->assertSame(20, $geo->getLimit());
        $this->assertSame(SortMetric::Spend, $geo->getSortBy());
    }

    public function testToArrayRoundTrip(): void
    {
        $input = [
            'media_buy_ids' => ['mb_1', 'mb_2'],
            'time_granularity' => 'daily',
        ];

        $req = new GetMediaBuyDeliveryRequest($input);
        $output = $req->toArray();

        $this->assertSame(['mb_1', 'mb_2'], $output['media_buy_ids']);
    }

    public function testToJson(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
            'include_package_daily_breakdown' => true,
        ]);

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame(['mb_1'], $decoded['media_buy_ids']);
    }

    public function testBuilderCreatesValidObject(): void
    {
        $req = (new GetMediaBuyDeliveryRequestBuilder())
            ->setMediaBuyIds(['mb_1'])
            ->setTimeGranularity(ReportingFrequency::Daily)
            ->validate();

        $this->assertSame(['mb_1'], $req->getMediaBuyIds());
        $this->assertSame(ReportingFrequency::Daily, $req->getTimeGranularity());
    }

    public function testBuilderDefaultsIncludeFlags(): void
    {
        $req = (new GetMediaBuyDeliveryRequestBuilder())
            ->setMediaBuyIds(['mb_1'])
            ->validate();

        $this->assertFalse($req->getIncludePackageDailyBreakdown());
        $this->assertFalse($req->getIncludeWindowBreakdown());
    }

    public function testPopulateUpdatesFields(): void
    {
        $req = new GetMediaBuyDeliveryRequest([
            'media_buy_ids' => ['mb_1'],
        ]);

        $req->populate(['include_package_daily_breakdown' => true]);

        $this->assertSame(['mb_1'], $req->getMediaBuyIds());
        $this->assertTrue($req->getIncludePackageDailyBreakdown());
    }
}
