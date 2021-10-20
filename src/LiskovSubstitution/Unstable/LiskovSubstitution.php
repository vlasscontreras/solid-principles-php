<?php

namespace Vlass\Solid\LiskovSubstitution\Unstable;

use InvalidArgumentException;
use Vlass\Solid\BaseClass;

class LiskovSubstitution extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        // Create a subclass-based request.
        $createUserRequest = new CreateUserRequest([
            'email'    => 'admin@test.com',
            'password' => 'secret',
            'is_admin' => true,
        ]);

        self::handleRequest($createUserRequest);

        // Create a parent class-based request.
        $createUserRequest = new FormRequest([
            'email'    => 'admin@test.com',
            'password' => 'secret',
            'is_admin' => true,
        ]);

        self::handleRequest($createUserRequest);
    }

    /**
     * Make a transaction
     *
     * @param  mixed  $request  Form request.
     * @return void
     * @throws InvalidArgumentException
     */
    public static function handleRequest($request)
    {
        if (is_a($request, CreateUserRequest::class)) {
            $request->validate();
            var_dump($request->getValidatedData());
        } else {
            var_dump($request->getValidatedData());
        }
    }
}
