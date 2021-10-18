<?php

namespace Vlass\Solid\LiskovSubstitution\Contracts;

use Throwable;

interface FormRequest
{
    /**
     * Set up the form request
     *
     * @param  array  $data  Form input/data.
     */
    public function __construct(array $data);

    /**
     * Get the names of the required fields.
     *
     * @return array
     */
    public function requiredFields(): array;

    /**
     * Validate the current request
     *
     * @return bool
     * @throws Throwable
     */
    public function validate(): bool;

    /**
     * Get the validated data
     *
     * @return array
     */
    public function getValidatedData(): array;
}
