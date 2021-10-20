<?php

namespace Vlass\Solid\DependencyInversion\Stable\Contracts;

use Vlass\Solid\DependencyInversion\Stable\Contracts\Connection;

interface Reminder
{
    /**
     * Set up the reminder.
     *
     * @param Connection $connection
     */
    public function __construct(Connection $connection);

    /**
     * Send the reminder.
     *
     * @return string
     */
    public function send(): string;
}
