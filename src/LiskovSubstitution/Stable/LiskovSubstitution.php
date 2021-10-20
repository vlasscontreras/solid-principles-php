<?php

namespace Vlass\Solid\LiskovSubstitution\Stable;

use Vlass\Solid\BaseClass;

class LiskovSubstitution extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $controller = new FormController();

        // Create a subclass-based request.
        $createUserRequest = new CreateUserRequest([
            'email'    => 'admin@test.com',
            'password' => 'secret',
        ]);

        $controller->handleRequest($createUserRequest);

        // Create a parent class-based request.
        $createUserRequest = new FormRequest([
            'email'    => 'admin@test.com',
            'password' => 'secret',
        ]);

        $controller->handleRequest($createUserRequest);
    }
}
