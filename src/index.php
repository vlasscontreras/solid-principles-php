<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Illuminate\Support\Str;
use Vlass\Solid\BaseClass;

$class = Str::ucfirst(Str::camel($argv[1]));
$stability = Str::ucfirst($argv[2] ?? 'stable');
$fcn = sprintf('\Vlass\Solid\%1$s\%2$s\%1$s', $class, $stability);

if (! (class_exists($fcn) && is_subclass_of($fcn, BaseClass::class))) {
    echo sprintf('%1$s class of %2$s could not be found', $stability, $argv[1]) . PHP_EOL;
    exit(1);
}

$fcn::run();
