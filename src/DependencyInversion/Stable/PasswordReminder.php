<?php

namespace Vlass\Solid\DependencyInversion\Stable;

use Vlass\Solid\DependencyInversion\Stable\Contracts\Reminder;
use Vlass\Solid\DependencyInversion\Stable\Contracts\Connection;

class PasswordReminder implements Reminder
{
    /**
     * Connection from where to get the user.
     *
     * @var Connection
     */
    protected Connection $connection;

    /** {@inheritdoc} */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /** {@inheritdoc} */
    public function send(): string
    {
        $this->connection->connect();

        if ($this->connection->isConnected()) {
            return 'Password reminder sent!';
        }

        return 'Failed to send password reminder!';
    }
}
