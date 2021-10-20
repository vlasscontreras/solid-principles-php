<?php

namespace Vlass\Solid\InterfaceSegregation\Unstable;

use Vlass\Solid\InterfaceSegregation\Unstable\Contracts\Record;
use Vlass\Solid\InterfaceSegregation\Unstable\Contracts\Repository;
use Vlass\Solid\InterfaceSegregation\Unstable\Exceptions\RecordNotFoundException;

class FixedCountryRepository implements Repository
{
    /**
     * {@inheritdoc}
     *
     * @return Country[]
     */
    public function all(): array
    {
        return [
            new Country('SV', 'El Salvador'),
            new Country('GT', 'Guatemala'),
            new Country('VE', 'Venezuela'),
            new Country('DO', 'República Dominicana'),
            new Country('MX', 'México'),
            new Country('CO', 'Colombia'),
        ];
    }

    /** {@inheritdoc} */
    public function find(string $code): Country
    {
        $countries = $this->all();

        foreach ($countries as $country) {
            if ($country->getCode() === $code) {
                return $country;
            }
        }

        throw new RecordNotFoundException("Country code '$code' not found");
    }

    /** {@inheritdoc} */
    public function create(Record $record): Record
    {
        throw new \Exception('Not implemented');
    }

    /** {@inheritdoc} */
    public function update(string $id, array $data): Record
    {
        throw new \Exception('Not implemented');
    }

    /** {@inheritdoc} */
    public function delete(string $id): void
    {
        throw new \Exception('Not implemented');
    }
}
