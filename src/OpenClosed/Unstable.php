<?php

namespace OpenClosed;

use InvalidArgumentException;
use Vlass\Solid\OpenClosed\PayPalPaymentProcessor;
use Vlass\Solid\OpenClosed\StripePaymentProcessor;

class Unstable
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
                $processor = new StripePaymentProcessor();
                break;

            case 'paypal':
                $amount = $amount / 100;
                $processor = new PayPalPaymentProcessor();
                break;

            default:
                throw new \InvalidArgumentException('Unknown processor');
        }

        $processor->pay($amount);
    }
}
