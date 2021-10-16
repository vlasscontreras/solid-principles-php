<?php

namespace Vlass\Solid\OpenClosed;

use Vlass\Solid\BaseClass;

class OpenClosed extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $checkout = new Checkout();

        $checkout->makeTransaction(100, new StripePaymentProcessor());
        $checkout->makeTransaction(100, new PayPalPaymentProcessor());
    }
}
