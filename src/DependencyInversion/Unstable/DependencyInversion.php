<?php

namespace Vlass\Solid\DependencyInversion\Unstable;

use Vlass\Solid\BaseClass;

class DependencyInversion extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $connection = new DatabaseConnection();
        $reminder = new PasswordReminder($connection);

        echo $reminder->send() . PHP_EOL;
    }
}
