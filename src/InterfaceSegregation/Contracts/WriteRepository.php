<?php

namespace Vlass\Solid\InterfaceSegregation\Contracts;

use Throwable;

interface WriteRepository
{
    /**
     * Create a new record.
     *
     * @param array $data
     * @return Record
     * @throws Throwable
     */
    public function create(array $data): Record;

    /**
     * Update a record.
     *
     * @param array $data
     * @return Record
     * @throws Throwable
     */
    public function update(array $data): Record;

    /**
     * Delete a record.
     *
     * @param string $id
     * @return void
     * @throws Throwable
     */
    public function delete(string $id): void;
}
