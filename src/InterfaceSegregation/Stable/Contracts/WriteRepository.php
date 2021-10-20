<?php

namespace Vlass\Solid\InterfaceSegregation\Stable\Contracts;

use Throwable;

interface WriteRepository
{
    /**
     * Create a new record.
     *
     * @param Record $record
     * @return Record
     * @throws Throwable
     */
    public function create(Record $record): Record;

    /**
     * Update a record.
     *
     * @param string $id
     * @param array $data
     * @return Record
     * @throws Throwable
     */
    public function update(string $id, array $data): Record;

    /**
     * Delete a record.
     *
     * @param string $id
     * @return void
     * @throws Throwable
     */
    public function delete(string $id): void;
}
