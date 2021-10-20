<?php

namespace Vlass\Solid\DependencyInversion\Unstable\Contracts;

use Throwable;

interface Connection
{
    /**
     * Initialize connection.
     *
     * @return bool
     * @throws Throwable
     */
    public function connect(): bool;

    /**
     * Check if the object is connected.
     *
     * @return bool
     */
    public function isConnected(): bool;
}
