<?php

namespace Vlass\Solid\OpenClosed;

use Vlass\Solid\OpenClosed\Contracts\PaymentProcessor;

class StripePaymentProcessor implements PaymentProcessor
{
    /** {@inheritdoc} */
    public function pay(int $amount): bool
    {
        echo 'Paying using Stripe';
        return true;
    }
}
