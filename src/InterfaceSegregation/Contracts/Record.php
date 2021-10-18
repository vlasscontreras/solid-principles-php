<?php

namespace Vlass\Solid\InterfaceSegregation\Contracts;

interface Record
{
    /**
     * Convert the record to array.
     *
     * @return array
     */
    public function toArray(): array;
}
