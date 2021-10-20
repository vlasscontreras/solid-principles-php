<?php

namespace Vlass\Solid\OpenClosed\Stable\Contracts;

interface PaymentProcessor
{
    /**
     * Run a payment.
     *
     * @param  int  $amount  Amount in cents.
     * @return bool
     */
    public function pay(int $amount): bool;
}
