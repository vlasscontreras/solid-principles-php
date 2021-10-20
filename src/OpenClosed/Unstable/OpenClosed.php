<?php

namespace Vlass\Solid\OpenClosed\Unstable;

use InvalidArgumentException;
use Vlass\Solid\BaseClass;

class OpenClosed extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        self::makeTransaction(100, 'stripe');
        echo PHP_EOL;
        self::makeTransaction(100, 'paypal');
        echo PHP_EOL;
    }

    /**
     * Make a transaction
     *
     * @param  int     $amount     Amount in cents.
     * @param  string  $processor  Payment processor name.
     * @return void
     * @throws InvalidArgumentException
     */
    public static function makeTransaction(int $amount, string $processor)
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
