<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\MediaBuyStatus;
use AdCP\MediaBuy\GetMediaBuysRequest;
use AdCP\MediaBuy\GetMediaBuysRequestBuilder;
use PHPUnit\Framework\TestCase;

class AdCPGetMediaBuysRequestTest extends TestCase
{
    public function testInstantiateEmpty(): void
    {
        $req = new GetMediaBuysRequest([]);

        $this->assertNull($req->getAdcpVersion());
        $this->assertNull($req->getMediaBuyIds());
        $this->assertNull($req->getStatusFilter());
        $this->assertNull($req->getAccount());
    }

    public function testSetAndGetProperties(): void
    {
        $req = new GetMediaBuysRequest([
            'adcp_version' => '3.1',
            'media_buy_ids' => ['mb_1', 'mb_2'],
            'status_filter' => ['active', 'paused'],
            'include_snapshot' => true,
            'include_history' => 5,
        ]);

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertSame(['mb_1', 'mb_2'], $req->getMediaBuyIds());

        $filter = $req->getStatusFilter();
        $this->assertIsArray($filter);
        $this->assertContainsOnlyInstancesOf(MediaBuyStatus::class, $filter);

        $this->assertTrue($req->getIncludeSnapshot());
        $this->assertSame(5, $req->getIncludeHistory());
    }

    public function testSetStatusFilterWithEnumObject(): void
    {
        $req = new GetMediaBuysRequest([
            'status_filter' => [MediaBuyStatus::Active, MediaBuyStatus::Paused],
        ]);

        $this->assertSame([MediaBuyStatus::Active, MediaBuyStatus::Paused], $req->getStatusFilter());
    }

    public function testSetSingleStatusFilterReturnsEnum(): void
    {
        $req = new GetMediaBuysRequest([
            'status_filter' => 'active',
        ]);

        $this->assertInstanceOf(MediaBuyStatus::class, $req->getStatusFilter());
        $this->assertSame(MediaBuyStatus::Active, $req->getStatusFilter());
    }

    public function testSetInvalidStatusFilterThrows(): void
    {
        $this->expectException(\PHPModelGenerator\Exception\ErrorRegistryException::class);

        new GetMediaBuysRequest([
            'status_filter' => 'nonexistent_status',
        ]);
    }

    public function testWithAccountById(): void
    {
        $req = new GetMediaBuysRequest([
            'account' => [
                'account_id' => 'acc_123',
            ],
        ]);

        $account = $req->getAccount();
        $this->assertNotNull($account);
        $this->assertSame('acc_123', $account->getAccountId());
    }

    public function testWithPagination(): void
    {
        $req = new GetMediaBuysRequest([
            'pagination' => [
                'max_results' => 25,
                'cursor' => 'abc123',
            ],
        ]);

        $pagination = $req->getPagination();
        $this->assertNotNull($pagination);
        $this->assertSame(25, $pagination->getMaxResults());
        $this->assertSame('abc123', $pagination->getCursor());
    }

    public function testToArrayRoundTrip(): void
    {
        $input = [
            'adcp_version' => '3.1',
            'media_buy_ids' => ['mb_1'],
            'include_snapshot' => true,
        ];

        $req = new GetMediaBuysRequest($input);
        $output = $req->toArray();

        $this->assertSame('3.1', $output['adcp_version']);
        $this->assertSame(['mb_1'], $output['media_buy_ids']);
        $this->assertTrue($output['include_snapshot']);
    }

    public function testToJson(): void
    {
        $req = new GetMediaBuysRequest([
            'adcp_version' => '3.1',
            'include_snapshot' => true,
        ]);

        $json = $req->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame('3.1', $decoded['adcp_version']);
        $this->assertTrue($decoded['include_snapshot']);
    }

    public function testBuilderCreatesValidObject(): void
    {
        $req = (new GetMediaBuysRequestBuilder())
            ->setAdcpVersion('3.1')
            ->setIncludeSnapshot(true)
            ->validate();

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertTrue($req->getIncludeSnapshot());
    }

    public function testBuilderWithMediaBuyIds(): void
    {
        $req = (new GetMediaBuysRequestBuilder())
            ->setMediaBuyIds(['mb_1', 'mb_2'])
            ->setStatusFilter('active')
            ->validate();

        $this->assertSame(['mb_1', 'mb_2'], $req->getMediaBuyIds());
        $this->assertSame(MediaBuyStatus::Active, $req->getStatusFilter());
    }

    public function testBuilderDefaults(): void
    {
        $req = (new GetMediaBuysRequestBuilder())
            ->validate();

        $this->assertFalse($req->getIncludeSnapshot());
        $this->assertSame(0, $req->getIncludeHistory());
        $this->assertFalse($req->getIncludeWebhookActivity());
        $this->assertSame(50, $req->getWebhookActivityLimit());
    }

    public function testPopulateUpdatesFields(): void
    {
        $req = new GetMediaBuysRequest([
            'adcp_version' => '3.1',
        ]);

        $req->populate(['include_snapshot' => true]);

        $this->assertSame('3.1', $req->getAdcpVersion());
        $this->assertTrue($req->getIncludeSnapshot());
    }
}
