<?php

namespace Vlass\Tests\InterfaceSegregation;

use Vlass\Solid\InterfaceSegregation\Contracts\Record;
use Vlass\Solid\InterfaceSegregation\CountryRepository;
use Vlass\Solid\InterfaceSegregation\Exceptions\RecordNotFoundException;
use Vlass\Tests\TestCase;

class CountryRepositoryTest extends TestCase
{
    /** {@test} */
    public function testItCanGetAllCountries()
    {
        $countryRepository = new CountryRepository();
        $countries = $countryRepository->all();

        $this->assertCount(6, $countries);
    }

    /** {@test} */
    public function testItReturnsArrayOfCountries()
    {
        $countryRepository = new CountryRepository();
        $countries = $countryRepository->all();

        foreach ($countries as $country) {
            $this->assertInstanceOf(Record::class, $country);
        }
    }

    /** {@test} */
    public function testItCanFindACountry()
    {
        $countryRepository = new CountryRepository();
        $country = $countryRepository->find('SV');

        $this->assertInstanceOf(Record::class, $country);
    }

    /** {@test} */
    public function testItThrowsExceptionWhenACountryIsNotFound()
    {
        $this->expectException(RecordNotFoundException::class);

        $countryRepository = new CountryRepository();
        $country = $countryRepository->find('TEST');
    }
}
