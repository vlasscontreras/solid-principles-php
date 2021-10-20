<?php

namespace Vlass\Tests\DependencyInversion;

use Vlass\Solid\DependencyInversion\Stable\DatabaseConnection;
use Vlass\Solid\DependencyInversion\Stable\PasswordReminder;
use Vlass\Tests\TestCase;

class PasswordReminderTest extends TestCase
{
    /** @test */
    public function testItCanSendReminder()
    {
        $connection = new DatabaseConnection();
        $reminder = new PasswordReminder($connection);
        $result = $reminder->send();

        $this->assertEquals('Password reminder sent!', $result);
    }
}
