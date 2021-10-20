<?php

namespace Vlass\Solid\SingleResponsibility\Unstable;

use DateTime;

class SingleResponsibility
{
    /**
     * Log message to file
     *
     * @param string        $level
     * @param string        $message
     * @param DateTime|null $dateTime
     * @return void
     */
    public function log(string $level, string $message, ?DateTime $dateTime = null): void
    {
        $dateTime = $dateTime ?? new DateTime();

        $logMessage = sprintf(
            '[%1$s] %2$s: %3$s',
            $dateTime->format('Y-m-d H:i:s'),
            $level,
            $message
        );

        file_put_contents('log.txt', $logMessage, FILE_APPEND);
    }
}
