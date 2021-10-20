<?php

namespace Vlass\Solid\DependencyInversion\Unstable;

use Vlass\Solid\DependencyInversion\Unstable\Contracts\Connection;

class DatabaseConnection implements Connection
{
    /**
     * Checks if the database is connected.
     *
     * @var bool
     */
    protected bool $isConnected = false;

    /** {@inheritdoc} */
    public function connect(): bool
    {
        $this->isConnected = true;

        return $this->isConnected;
    }

    /** {@inheritdoc} */
    public function isConnected(): bool
    {
        return $this->isConnected;
    }
}
