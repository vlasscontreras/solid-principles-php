<?php

namespace Vlass\Solid\LiskovSubstitution\Unstable;

use InvalidArgumentException;

class LiskovSubstitution
{
    /**
     * Make a transaction
     *
     * @param  mixed  $request  Form request.
     * @return void
     * @throws InvalidArgumentException
     */
    public function handleRequest($request)
    {
        if (is_a($request, CreateUserRequest::class)) {
            $request->validate();
            var_dump($request->getValidatedData());
        } else {
            var_dump($request->getValidatedData());
        }
    }
}
