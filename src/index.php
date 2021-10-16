<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$class = sprintf('\Vlass\Solid\%1$s\%1$s', $argv[1]);

if (! class_exists($class)) {
    echo sprintf('Class %s not found', $argv[1]) . PHP_EOL;
    exit(1);
}

$class::run();
