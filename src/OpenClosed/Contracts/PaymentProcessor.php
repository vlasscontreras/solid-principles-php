<?php

namespace Vlass\Solid\OpenClosed\Contracts;

interface PaymentProcessor
{
    /**
     * Log message.
     *
     * @param  int  $amount  Amount in cents.
     * @return bool
     */
    public function pay(int $amount): bool;
}
