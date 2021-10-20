<?php

namespace Vlass\Tests\DependencyInversion;

use Vlass\Solid\DependencyInversion\Stable\DatabaseConnection;
use Vlass\Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
    /** @test */
    public function testItCanConnectToTheDatabase()
    {
        $connection = new DatabaseConnection();
        $connection->connect();

        $this->assertTrue($connection->isConnected());
    }
}
