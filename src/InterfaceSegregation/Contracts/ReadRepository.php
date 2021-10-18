<?php

namespace Vlass\Solid\InterfaceSegregation\Contracts;

use Throwable;

interface ReadRepository
{
    /**
     * Return all the records of the repository.
     *
     * @return Record[]
     */
    public function all(): array;

    /**
     * Find a record by ID.
     *
     * @param  string  $id  Record identifier.
     * @return Record
     * @throws Throwable
     */
    public function find(string $id): Record;
}
