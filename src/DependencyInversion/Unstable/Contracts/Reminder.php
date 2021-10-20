<?php

namespace Vlass\Solid\DependencyInversion\Unstable\Contracts;

use Vlass\Solid\DependencyInversion\Unstable\DatabaseConnection;

interface Reminder
{
    /**
     * Set up the reminder.
     *
     * @param DatabaseConnection $connection
     */
    public function __construct(DatabaseConnection $connection);

    /**
     * Send the reminder.
     *
     * @return string
     */
    public function send(): string;
}
