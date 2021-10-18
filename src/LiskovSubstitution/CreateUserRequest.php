<?php

namespace Vlass\Solid\LiskovSubstitution;

class CreateUserRequest extends FormRequest
{
    /** {@inheritdoc} */
    public function requiredFields(): array
    {
        return [
            'email',
            'password',
        ];
    }
}
