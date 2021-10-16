<?php

declare(strict_types=1);

namespace Vlass\Tests\OpenClosed;

use Vlass\Solid\OpenClosed\StripePaymentProcessor;
use Vlass\Solid\OpenClosed\FileManager;
use Vlass\Solid\OpenClosed\Log;
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
