<?php

declare(strict_types=1);

namespace Vlass\Tests\SingleResponsibility;

use DateTime;
use Vlass\Solid\SingleResponsibility\Exceptions\InvalidLogLevelException;
use Vlass\Solid\SingleResponsibility\Log;
use Vlass\Tests\TestCase;

class LogTest extends TestCase
{
    /** @test */
    public function testItHasFormat(): void
    {
        $date = new DateTime('2021-10-15T19:38:00');
        $log = new Log(Log::LEVEL_DEBUG, 'Test log', $date);

        $this->assertEquals('[2021-10-15 19:38:00] DEBUG: Test log', $log->__toString());
    }

    /** @test */
    public function testItFallsbackToCurrentDate(): void
    {
        $date = new DateTime();
        $log = new Log(Log::LEVEL_DEBUG, 'Test log');

        $expected = sprintf('[%s] DEBUG: Test log', $date->format('Y-m-d H:i:s'));

        $this->assertEquals($expected, $log->__toString());
    }

    /** @test */
    public function testItThrowsExceptionOnInvalidLevels(): void
    {
        $this->expectException(InvalidLogLevelException::class);
        new Log('TEST', 'Test log', new DateTime());
    }
}
