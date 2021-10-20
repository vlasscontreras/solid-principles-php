<?php

namespace Vlass\Solid\InterfaceSegregation\Stable;

use Vlass\Solid\BaseClass;

class InterfaceSegregation extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $countryRepository = new MemoryCountryRepository();
        $countryRepository->create(new Country('SV', 'El Salvador'));
        var_dump($countryRepository->all());

        $countryRepository = new FixedCountryRepository();
        // $countryRepository->create(new Country('SV', 'El Salvador')); // 😟
        var_dump($countryRepository->all());
    }
}
