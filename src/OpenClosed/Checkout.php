<?php

namespace Vlass\Solid\OpenClosed;

use Vlass\Solid\OpenClosed\Contracts\PaymentProcessor;
use Vlass\Solid\OpenClosed\Contracts\Checkout as CheckoutContract;

class Checkout implements CheckoutContract
{
    /** {@inheritdoc} */
    public function makeTransaction(int $amount, PaymentProcessor $processor): void
    {
        $processor->pay($amount);
    }
}
