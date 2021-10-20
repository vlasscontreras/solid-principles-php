<?php

declare(strict_types=1);

namespace Vlass\Tests\OpenClosed;

use Vlass\Solid\OpenClosed\Stable\PayPalPaymentProcessor;
use Vlass\Tests\TestCase;

class PayPalPaymentProcessorTest extends TestCase
{
    /** @test */
    public function testItPrintsPaymentMessage(): void
    {
        $this->expectOutputString('Paying using PayPal');

        $processor = new PayPalPaymentProcessor();
        $processor->pay(100);
    }
}
