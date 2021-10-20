<?php

namespace Vlass\Solid\OpenClosed\Stable;

use Vlass\Solid\BaseClass;

class OpenClosed extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $checkout = new Checkout();

        $checkout->makeTransaction(100, new StripePaymentProcessor());
        echo PHP_EOL;
        $checkout->makeTransaction(100, new PayPalPaymentProcessor());
        echo PHP_EOL;
    }
}
