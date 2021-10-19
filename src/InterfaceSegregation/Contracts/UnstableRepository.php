<?php

namespace Vlass\Solid\InterfaceSegregation\Contracts;

interface UnstableRepository
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
