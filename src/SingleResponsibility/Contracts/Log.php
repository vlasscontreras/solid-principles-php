<?php

namespace Vlass\Solid\SingleResponsibility\Contracts;

use DateTime;

interface Log
{
    /**
     * Set up the file manager.
     *
     * @param  string    $level     Log level.
     * @param  string    $message   Log message.
     * @param  DateTime  $dateTime  Log date time.
     */
    public function __construct(string $level, string $message, DateTime $dateTime);

    /**
     * Read the contents of the current file.
     *
     * @return  string
     */
    public function __toString(): string;
}
