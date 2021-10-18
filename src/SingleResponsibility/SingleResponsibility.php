<?php

namespace Vlass\Solid\SingleResponsibility;

use Vlass\Solid\BaseClass;

class SingleResponsibility extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $log = new Log(Log::LEVEL_INFO, 'This should be on a file');
        $fileManager = new FileManager('log.txt');

        $fileManager->appendToFile($log);

        echo 'Outputted to log.txt' . PHP_EOL;
    }
}
