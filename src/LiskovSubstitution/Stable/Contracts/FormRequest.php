<?php

namespace Vlass\Solid\LiskovSubstitution\Stable\Contracts;

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
