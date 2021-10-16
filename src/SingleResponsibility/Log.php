<?php

namespace Vlass\Solid\SingleResponsibility;

use DateTime;
use Vlass\Solid\SingleResponsibility\Contracts\Log as LogContract;
use Vlass\Solid\SingleResponsibility\Exceptions\InvalidLogLevelException;

class Log implements LogContract
{
    public const LEVEL_DEBUG = 'DEBUG';
    public const LEVEL_INFO = 'INFO';
    public const LEVEL_WARNING = 'WARNING';
    public const LEVEL_ERROR = 'ERROR';

    /**
     * Log level
     *
     * @var string
     */
    protected string $level;

    /**
     * Log message
     *
     * @var string
     */
    protected string $message;

    /**
     * Log datetime
     *
     * @var DateTime
     */
    protected DateTime $dateTime;

    /** {@inheritdoc} */
    public function __construct(string $level, string $message, DateTime $dateTime)
    {
        if (! $this->isValidLevel($level)) {
            throw new InvalidLogLevelException();
        }

        $this->level = $level;
        $this->message = $message;
        $this->dateTime = $dateTime;
    }

    /** {@inheritdoc} */
    public function __toString(): string
    {
        return sprintf(
            '[%1$s] %2$s: %3$s',
            $this->dateTime->format('Y-m-d H:i:s'),
            $this->level,
            $this->message
        );
    }

    /**
     * Check if the given log level is valid.
     *
     * @param  string  $level Log level.
     * @return bool
     */
    protected function isValidLevel(string $level): bool
    {
        return in_array($level, $this->getLevels());
    }

    /**
     * Get log levels
     *
     * @return array
     */
    protected function getLevels(): array
    {
        $class = new \ReflectionClass(self::class);

        return array_values($class->getConstants());
    }
}
