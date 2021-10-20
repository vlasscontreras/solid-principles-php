<?php

namespace Vlass\Solid\OpenClosed\Stable;

use Vlass\Solid\OpenClosed\Stable\Contracts\PaymentProcessor;
use Vlass\Solid\OpenClosed\Stable\Contracts\Checkout as CheckoutContract;

class Checkout implements CheckoutContract
{
    /** {@inheritdoc} */
    public function makeTransaction(int $amount, PaymentProcessor $processor): void
    {
        $processor->pay($amount);
    }
}
