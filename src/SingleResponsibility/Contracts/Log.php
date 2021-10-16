<?php

namespace Vlass\Solid\SingleResponsibility\Contracts;

use DateTime;
use Stringable;

interface Log extends Stringable
{
    /**
     * Set up the file manager.
     *
     * @param  string    $level     Log level.
     * @param  string    $message   Log message.
     * @param  DateTime  $dateTime  Log date time.
     */
    public function __construct(string $level, string $message, DateTime $dateTime);
}
