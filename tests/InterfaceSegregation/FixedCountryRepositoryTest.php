<?php

namespace Vlass\Tests\InterfaceSegregation;

use Vlass\Solid\InterfaceSegregation\Contracts\Record;
use Vlass\Solid\InterfaceSegregation\FixedCountryRepository;
use Vlass\Solid\InterfaceSegregation\Exceptions\RecordNotFoundException;
use Vlass\Tests\TestCase;

class FixedCountryRepositoryTest extends TestCase
{
    /** @test */
    public function testItCanGetAllCountries()
    {
        $countryRepository = new FixedCountryRepository();
        $countries = $countryRepository->all();

        $this->assertCount(6, $countries);
    }

    /** @test */
    public function testItReturnsArrayOfCountries()
    {
        $countryRepository = new FixedCountryRepository();
        $countries = $countryRepository->all();

        foreach ($countries as $country) {
            $this->assertInstanceOf(Record::class, $country);
        }
    }

    /** @test */
    public function testItCanFindACountry()
    {
        $countryRepository = new FixedCountryRepository();
        $country = $countryRepository->find('SV');

        $this->assertInstanceOf(Record::class, $country);
    }

    /** @test */
    public function testItThrowsExceptionWhenACountryIsNotFound()
    {
        $this->expectException(RecordNotFoundException::class);

        $countryRepository = new FixedCountryRepository();
        $country = $countryRepository->find('TEST');
    }
}
