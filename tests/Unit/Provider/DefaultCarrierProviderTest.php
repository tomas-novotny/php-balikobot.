<?php

declare(strict_types=1);

namespace Inspirum\Balikobot\Tests\Unit\Provider;

use Inspirum\Balikobot\Definitions\Carrier;
use Inspirum\Balikobot\Provider\DefaultCarrierProvider;
use Inspirum\Balikobot\Tests\BaseTestCase;

final class DefaultCarrierProviderTest extends BaseTestCase
{
    public function testGetCarriers(): void
    {
        $provider = $this->newDefaultCarrierProvider();

        $expectedCarriers = Carrier::all();
        $carriers         = $provider->getCarriers();

        self::assertSame($expectedCarriers, $carriers);
    }

    private function newDefaultCarrierProvider(): DefaultCarrierProvider
    {
        return new DefaultCarrierProvider();
    }
}
