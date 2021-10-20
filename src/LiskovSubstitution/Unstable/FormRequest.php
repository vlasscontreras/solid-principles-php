<?php

namespace Vlass\Solid\LiskovSubstitution\Unstable;

class FormRequest
{
    /**
     * Set up the form request
     *
     * @param  array  $data  Form input/data.
     */
    public function __construct(protected array $data)
    {
        //
    }

    /**
     * Get the validated data
     *
     * @return array
     */
    public function getValidatedData(): array
    {
        return $this->data;
    }
}
