<?php

namespace VlassContreras\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * The application base path.
     *
     * @var string
     */
    protected string $basePath;

    /**
     * Set up base test case
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->setBasePath();
    }

    /**
     * Get the application base path.
     *
     * @return void
     */
    protected function setBasePath(): void
    {
        $this->basePath = dirname(__DIR__);
    }
}
