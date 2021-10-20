<?php

namespace Vlass\Solid\InterfaceSegregation\Unstable;

use Vlass\Solid\InterfaceSegregation\Unstable\Contracts\Record;

class Country implements Record
{
    /** {@inheritdoc} */
    public function __construct(protected string $code, protected string $name)
    {
        //
    }

    /**
     * Get the country code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Get the country name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /** {@inheritdoc} */
    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
        ];
    }
}
