<?php

namespace Vlass\Solid\OpenClosed\Stable\Contracts;

use Vlass\Solid\OpenClosed\Stable\Contracts\PaymentProcessor;

interface Checkout
{
    /**
     * Complete checkout by making the transaction.
     *
     * @param   int               $amount     Amount in cents.
     * @param   PaymentProcessor  $processor  Payment processor.
     * @return  mixed
     */
    public function makeTransaction(int $amount, PaymentProcessor $processor): void;
}
