<?php

namespace Vlass\Solid\LiskovSubstitution;

use InvalidArgumentException;

class Unstable
{
    /**
     * Make a transaction
     *
     * @param  FormRequest  $request  Form request.
     * @return void
     * @throws InvalidArgumentException
     */
    public function handleRequest(FormRequest $request)
    {
        if (is_a($request, CreateUserRequest::class)) {
            $request->validate();
            var_dump($request->getValidatedData());
        } else {
            throw new InvalidArgumentException('Invalid request');
        }
    }
}
