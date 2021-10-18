<?php

namespace Vlass\Solid\LiskovSubstitution;

class CreateUserRequest extends FormRequest
{
    /** {@inheritdoc} */
    protected array $required = [
        'email',
        'password',
    ];
}
