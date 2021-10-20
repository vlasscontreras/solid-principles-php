<?php

namespace Vlass\Solid\SingleResponsibility\Stable;

use DateTime;
use ReflectionClass;
use Stringable;
use Vlass\Solid\SingleResponsibility\Stable\Exceptions\InvalidLogLevelException;

class Log implements Stringable
{
    public const LEVEL_DEBUG = 'DEBUG';
    public const LEVEL_INFO = 'INFO';
    public const LEVEL_WARNING = 'WARNING';
    public const LEVEL_ERROR = 'ERROR';

    /**
     * Log datetime
     *
     * @var DateTime
     */
    protected DateTime $dateTime;

    /**
     * Set up the file manager.
     *
     * @param  string    $level     Log level.
     * @param  string    $message   Log message.
     * @param  DateTime  $dateTime  Log date time.
     */
    public function __construct(protected string $level, protected string $message, ?DateTime $dateTime = null)
    {
        if (! $this->isValidLevel($level)) {
            throw new InvalidLogLevelException();
        }

        $this->dateTime = $dateTime ?? new DateTime();
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
        $class = new ReflectionClass(self::class);

        return array_values($class->getConstants());
    }
}
