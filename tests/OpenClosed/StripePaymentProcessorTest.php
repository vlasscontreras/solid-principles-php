<?php

declare(strict_types=1);

namespace Vlass\Tests\OpenClosed;

use Vlass\Solid\OpenClosed\Stable\StripePaymentProcessor;
use Vlass\Solid\OpenClosed\Stable\FileManager;
use Vlass\Solid\OpenClosed\Stable\Log;
use Vlass\Tests\TestCase;

class StripePaymentProcessorTest extends TestCase
{
    /** @test */
    public function testItPrintsPaymentMessage(): void
    {
        $this->expectOutputString('Paying using Stripe');

        $processor = new StripePaymentProcessor();
        $processor->pay(100);
    }
}
