<?php

namespace Vlass\Solid\OpenClosed\Stable;

use Vlass\Solid\OpenClosed\Stable\Contracts\PaymentProcessor;

class PayPalPaymentProcessor implements PaymentProcessor
{
    /** {@inheritdoc} */
    public function pay(int $amount): bool
    {
        echo 'Paying using PayPal';
        return true;
    }
}
