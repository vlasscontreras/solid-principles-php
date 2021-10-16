<?php

namespace Vlass\Solid\OpenClosed;

use Vlass\Solid\OpenClosed\Contracts\PaymentProcessor;

class PayPalPaymentProcessor implements PaymentProcessor
{
    /** {@inheritdoc} */
    public function pay(int $amount): bool
    {
        echo 'Paying using PayPal';
        return true;
    }
}
