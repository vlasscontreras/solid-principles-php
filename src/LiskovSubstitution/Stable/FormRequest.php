<?php

namespace Vlass\Solid\LiskovSubstitution\Stable;

use Vlass\Solid\LiskovSubstitution\Stable\Contracts\FormRequest as FormRequestContract;
use Vlass\Solid\LiskovSubstitution\Stable\Exceptions\ValidationException;

class FormRequest implements FormRequestContract
{
    /**
     * Validated data
     *
     * @var array
     */
    protected array $validatedData = [];

    /**
     * Required fields
     *
     * @var array
     */
    protected array $required = [];

    /** {@inheritdoc} */
    public function __construct(protected array $data)
    {
        //
    }

    /** {@inheritdoc} */
    public function validate(): bool
    {
        if (! $this->hasRequiredFields()) {
            return true;
        }

        foreach ($this->required as $field) {
            if (! $this->isFieldRequired($field)) {
                continue;
            }

            if (! $this->isFieldSet($field)) {
                throw new ValidationException("Field $field is required");
            }


            $this->validatedData[$field] = $this->data[$field];
        }

        return true;
    }

    /** {@inheritdoc} */
    public function getValidatedData(): array
    {
        if (! $this->hasRequiredFields()) {
            return $this->data;
        }

        return $this->validatedData;
    }

    /**
     * Check if the current class has rules.
     *
     * @return bool
     */
    protected function hasRequiredFields(): bool
    {
        return count($this->required) > 0;
    }

    /**
     * Check if the given field is required.
     *
     * @param string $field
     * @return bool
     */
    protected function isFieldRequired(string $field): bool
    {
        return in_array($field, $this->required);
    }

    /**
     * Check if the given field is set.
     *
     * @param string $field
     * @return bool
     */
    protected function isFieldSet(string $field): bool
    {
        return array_key_exists($field, $this->data)
            && ! empty($this->data[$field]);
    }
}
