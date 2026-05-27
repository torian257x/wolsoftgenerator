<?php

declare(strict_types=1);

namespace PHPModelGenerator\Tests\PostProcessor;

use AdCP\MediaBuy\Enums\MediaBuyStatus;
use AdCP\MediaBuy\GetMediaBuysResponse;
use AdCP\MediaBuy\GetMediaBuysResponseBuilder;
use PHPModelGenerator\Exception\ErrorRegistryException;
use PHPUnit\Framework\TestCase;

class AdCPGetMediaBuysResponseTest extends TestCase
{
    public function testInstantiateWithEmptyMediaBuys(): void
    {
        $resp = new GetMediaBuysResponse([
            'media_buys' => [],
        ]);

        $this->assertSame([], $resp->getMediaBuys());
    }

    public function testInstantiateThrowsOnMissingMediaBuys(): void
    {
        $this->expectException(ErrorRegistryException::class);

        new GetMediaBuysResponse([]);
    }

    public function testInstantiateThrowsOnNullMediaBuys(): void
    {
        $this->expectException(ErrorRegistryException::class);

        new GetMediaBuysResponse(['media_buys' => null]);
    }

    public function testSetAndGetProperties(): void
    {
        $resp = new GetMediaBuysResponse([
            'media_buys' => [],
            'adcp_version' => '3.1',
            'sandbox' => true,
            'ext' => [
                'vendor_key' => 'value',
            ],
        ]);

        $this->assertSame('3.1', $resp->getAdcpVersion());
        $this->assertTrue($resp->getSandbox());

        $ext = $resp->getExt();
        $this->assertNotNull($ext);
    }

    public function testWithMediaBuyItem(): void
    {
        $resp = new GetMediaBuysResponse([
            'media_buys' => [
                [
                    'media_buy_id' => 'mb_1',
                    'status' => 'active',
                    'currency' => 'USD',
                    'total_budget' => 10000.0,
                    'packages' => [],
                    'account' => [
                        'account_id' => 'acc_123',
                        'name' => 'Test Account',
                        'status' => 'active',
                    ],
                ],
            ],
        ]);

        $buys = $resp->getMediaBuys();
        $this->assertCount(1, $buys);

        $buy = $buys[0];
        $this->assertSame('mb_1', $buy->getMediaBuyId());
        $this->assertSame(MediaBuyStatus::Active, $buy->getStatus());
        $this->assertSame('USD', $buy->getCurrency());
        $this->assertSame(10000.0, $buy->getTotalBudget());

        $account = $buy->getAccount();
        $this->assertNotNull($account);
        $this->assertSame('acc_123', $account->getAccountId());
        $this->assertSame('Test Account', $account->getName());
    }

    public function testSetInvalidMediaBuyStatusThrows(): void
    {
        $this->expectException(ErrorRegistryException::class);

        new GetMediaBuysResponse([
            'media_buys' => [
                [
                    'media_buy_id' => 'mb_1',
                    'status' => 'nonexistent_status',
                    'currency' => 'USD',
                    'total_budget' => 10000.0,
                    'packages' => [],
                    'account' => [
                        'account_id' => 'acc_123',
                        'name' => 'Test',
                        'status' => 'active',
                    ],
                ],
            ],
        ]);
    }

    public function testToArrayRoundTrip(): void
    {
        $input = [
            'media_buys' => [],
            'adcp_version' => '3.1',
            'sandbox' => false,
        ];

        $resp = new GetMediaBuysResponse($input);
        $output = $resp->toArray();

        $this->assertSame([], $output['media_buys']);
        $this->assertSame('3.1', $output['adcp_version']);
        $this->assertFalse($output['sandbox']);
    }

    public function testToJson(): void
    {
        $resp = new GetMediaBuysResponse([
            'media_buys' => [],
            'adcp_version' => '3.1',
        ]);

        $json = $resp->toJSON();
        $this->assertJson($json);

        $decoded = json_decode($json, true);
        $this->assertSame([], $decoded['media_buys']);
    }

    public function testBuilderCreatesValidObject(): void
    {
        $req = (new GetMediaBuysResponseBuilder())
            ->setMediaBuys([])
            ->setAdcpVersion('3.1')
            ->validate();

        $this->assertSame([], $req->getMediaBuys());
        $this->assertSame('3.1', $req->getAdcpVersion());
    }

    public function testBuilderThrowsOnMissingMediaBuys(): void
    {
        $this->expectException(ErrorRegistryException::class);

        (new GetMediaBuysResponseBuilder())
            ->validate();
    }

    public function testPopulateUpdatesFields(): void
    {
        $resp = new GetMediaBuysResponse([
            'media_buys' => [],
        ]);

        $resp->populate(['sandbox' => true]);

        $this->assertSame([], $resp->getMediaBuys());
        $this->assertTrue($resp->getSandbox());
    }

    public function testJsonSerialize(): void
    {
        $resp = new GetMediaBuysResponse([
            'media_buys' => [],
            'adcp_version' => '3.1',
        ]);

        $serialized = $resp->jsonSerialize();
        $this->assertArrayHasKey('media_buys', $serialized);
        $this->assertSame('3.1', $serialized['adcp_version']);
    }
}
