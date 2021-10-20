<?php

namespace Vlass\Solid\LiskovSubstitution\Stable;

class CreateUserRequest extends FormRequest
{
    /** {@inheritdoc} */
    protected array $required = [
        'email',
        'password',
    ];
}
