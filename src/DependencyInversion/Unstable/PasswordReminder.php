<?php

namespace Vlass\Solid\DependencyInversion\Unstable;

use Vlass\Solid\DependencyInversion\Unstable\Contracts\Reminder;

class PasswordReminder implements Reminder
{
    /**
     * Connection from where to get the user.
     *
     * @var DatabaseConnection
     */
    protected DatabaseConnection $connection;

    /**
     * Set up reminder.
     *
     * @param DatabaseConnection $connection
     */
    public function __construct(DatabaseConnection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Send the reminder.
     *
     * @return string
     */
    public function send(): string
    {
        $this->connection->connect();

        if ($this->connection->isConnected()) {
            return 'Password reminder sent!';
        }

        return 'Failed to send password reminder!';
    }
}
