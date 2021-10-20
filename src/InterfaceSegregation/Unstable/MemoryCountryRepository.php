<?php

namespace Vlass\Solid\InterfaceSegregation\Unstable;

use Vlass\Solid\InterfaceSegregation\Unstable\Contracts\Record;
use Vlass\Solid\InterfaceSegregation\Unstable\Contracts\Repository;
use Vlass\Solid\InterfaceSegregation\Unstable\Exceptions\RecordNotFoundException;

class MemoryCountryRepository implements Repository
{
    /**
     * Data file path
     *
     * @var Country[]
     */
    protected array $countries = [];

    /**
     * {@inheritdoc}
     *
     * @return Country[]
     */
    public function all(): array
    {
        return $this->countries;
    }

    /** {@inheritdoc} */
    public function find(string $code): Country
    {
        foreach ($this->countries as $country) {
            if ($country->getCode() === $code) {
                return $country;
            }
        }

        throw new RecordNotFoundException("Country code '$code' not found");
    }

    /** {@inheritdoc} */
    public function create(Record $country): Country
    {
        $this->countries[] = $country;

        return $country;
    }

    /** {@inheritdoc} */
    public function update(string $id, array $data): Country
    {
        $country = $this->find($id);
        $countryIndex = array_search($country, $this->countries);

        $this->countries[$countryIndex] = new Country(
            $id,
            $data['name'] ?? ''
        );

        return $country;
    }

    /** {@inheritdoc} */
    public function delete(string $id): void
    {
        $country = $this->find($id);
        $countryIndex = array_search($country, $this->countries);

        unset($this->countries[$countryIndex]);
    }
}
