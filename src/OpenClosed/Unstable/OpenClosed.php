<?php

namespace Vlass\Solid\OpenClosed\Unstable;

use InvalidArgumentException;

class OpenClosed
{
    /**
     * Make a transaction
     *
     * @param  int     $amount     Amount in cents.
     * @param  string  $processor  Payment processor name.
     * @return void
     * @throws InvalidArgumentException
     */
    public function makeTransaction(int $amount, string $processor)
    {
        switch ($processor) {
            case 'stripe':
                echo 'Paying using Stripe';
                break;

            case 'paypal':
                $amount = $amount / 100;
                echo 'Paying using PayPal';
                break;

            default:
                throw new \InvalidArgumentException('Unknown processor');
        }
    }
}
