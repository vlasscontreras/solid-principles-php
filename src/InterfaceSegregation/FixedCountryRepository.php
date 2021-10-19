<?php

namespace Vlass\Solid\InterfaceSegregation;

use Vlass\Solid\InterfaceSegregation\Contracts\ReadRepository;
use Vlass\Solid\InterfaceSegregation\Exceptions\RecordNotFoundException;

class FixedCountryRepository implements ReadRepository
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
}
