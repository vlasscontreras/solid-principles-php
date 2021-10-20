<?php

declare(strict_types=1);

namespace Vlass\Tests\OpenClosed;

use Vlass\Solid\OpenClosed\Stable\Checkout;
use Vlass\Solid\OpenClosed\Stable\StripePaymentProcessor;
use Vlass\Solid\OpenClosed\Stable\PayPalPaymentProcessor;
use Vlass\Tests\TestCase;

class CheckoutTest extends TestCase
{
    /** @test */
    public function testItAcceptsAnyPaymentProcessor(): void
    {
        $this->expectOutputString('Paying using Stripe' . 'Paying using PayPal');

        $checkout = new Checkout();

        $checkout->makeTransaction(100, new StripePaymentProcessor());
        $checkout->makeTransaction(100, new PayPalPaymentProcessor());
    }
}
