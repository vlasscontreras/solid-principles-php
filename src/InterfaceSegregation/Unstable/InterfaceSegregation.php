<?php

namespace Vlass\Solid\InterfaceSegregation\Unstable;

use Vlass\Solid\BaseClass;

class InterfaceSegregation extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $countryRepository = new MemoryCountryRepository();
        $countryRepository->create(new Country('SV', 'El Salvador'));
        var_dump($countryRepository->all());

        try {
            $countryRepository = new FixedCountryRepository();
            $countryRepository->create(new Country('SV', 'El Salvador')); // 🤔
            var_dump($countryRepository->all());
        } catch (\Exception $e) {
            echo '😫👉 You told me you had that method!' . PHP_EOL;
            echo '😾' . PHP_EOL;
        }
    }
}
