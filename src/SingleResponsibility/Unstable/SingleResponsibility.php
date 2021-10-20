<?php

namespace Vlass\Solid\SingleResponsibility\Unstable;

use DateTime;
use Vlass\Solid\BaseClass;

class SingleResponsibility extends BaseClass
{
    /** {@inheritdoc} */
    public static function run(): void
    {
        self::log('DEBUG', 'Logging to file');
        echo 'Outputted to log.txt' . PHP_EOL;
    }

    /**
     * Log message to file
     *
     * @param string        $level
     * @param string        $message
     * @param DateTime|null $dateTime
     * @return void
     */
    protected static function log(string $level, string $message, ?DateTime $dateTime = null): void
    {
        $dateTime = $dateTime ?? new DateTime();

        $logMessage = sprintf(
            '[%1$s] %2$s: %3$s',
            $dateTime->format('Y-m-d H:i:s'),
            $level,
            $message
        ) . PHP_EOL;

        file_put_contents('log.txt', $logMessage, FILE_APPEND);
    }
}
