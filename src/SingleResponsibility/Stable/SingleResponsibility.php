<?php

namespace Vlass\Solid\SingleResponsibility\Stable;

use Vlass\Solid\BaseClass;

class SingleResponsibility extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        $log = new Log(Log::LEVEL_INFO, 'This should be on a file');
        $fileManager = new FileManager('log.txt');

        $fileManager->appendToFile($log->toString());

        echo 'Outputted to log.txt' . PHP_EOL;
    }
}
