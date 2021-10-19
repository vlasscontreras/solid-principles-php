<?php

namespace Vlass\Tests\InterfaceSegregation;

use Vlass\Solid\InterfaceSegregation\Contracts\Record;
use Vlass\Solid\InterfaceSegregation\Country;
use Vlass\Solid\InterfaceSegregation\MemoryCountryRepository;
use Vlass\Solid\InterfaceSegregation\Exceptions\RecordNotFoundException;
use Vlass\Tests\TestCase;

class MemoryCountryRepositoryTest extends TestCase
{
    /** @test */
    public function testItCanCreateACountry()
    {
        $countryRepository = new MemoryCountryRepository();
        $countryRepository->create(new Country('US', 'United States'));

        $country = $countryRepository->find('US');

        $this->assertEquals('United States', $country->getName());
    }

    /** @test */
    public function testItCanGetAllCountries()
    {
        $countryRepository = new MemoryCountryRepository();

        $countryRepository->create(new Country('US', 'United States'));
        $countryRepository->create(new Country('SV', 'El Salvador'));

        $this->assertCount(2, $countryRepository->all());
    }

    /** @test */
    public function testItReturnsArrayOfCountries()
    {
        $countryRepository = new MemoryCountryRepository();

        $countryRepository->create(new Country('US', 'United States'));

        $countries = $countryRepository->all();

        foreach ($countries as $country) {
            $this->assertInstanceOf(Record::class, $country);
        }
    }

    /** @test */
    public function testItCanFindACountry()
    {
        $countryRepository = new MemoryCountryRepository();
        $countryRepository->create(new Country('US', 'United States'));
        $country = $countryRepository->find('US');

        $this->assertInstanceOf(Record::class, $country);
    }

    /** @test */
    public function testItThrowsExceptionWhenACountryIsNotFound()
    {
        $this->expectException(RecordNotFoundException::class);

        $countryRepository = new MemoryCountryRepository();
        $country = $countryRepository->find('TEST');
    }

    /** @test */
    public function testItCanUpdateACountry()
    {
        $countryRepository = new MemoryCountryRepository();
        $countryRepository->create(new Country('DO', 'Dominican Republic'));

        $currentCountry = $countryRepository->find('DO');

        $countryRepository->update('DO', [
            'name' => 'República Dominicana',
        ]);

        $newCountry = $countryRepository->find('DO');

        $this->assertEquals('Dominican Republic', $currentCountry->getName());
        $this->assertEquals('República Dominicana', $newCountry->getName());
    }

    /** @test */
    public function testItCanDeleteACountry()
    {
        $this->expectException(RecordNotFoundException::class);

        $countryRepository = new MemoryCountryRepository();
        $countryRepository->create(new Country('US', 'United States'));

        $countryRepository->delete('US');
        $countryRepository->find('US');
    }
}
