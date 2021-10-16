<?php

declare(strict_types=1);

namespace Vlass\Tests\SingleResponsibility;

use Vlass\Solid\SingleResponsibility\FileManager;
use Vlass\Tests\TestCase;

class FileManagerTest extends TestCase
{
    protected $filePath;

    /** {@inheritdoc} */
    protected function setUp(): void
    {
        parent::setUp();
        $this->prepareFile();
    }

    /**
     * Prepare the file for testing.
     *
     * @return void
     */
    protected function prepareFile(): void
    {
        $this->filePath = $this->basePath . '/.tests';

        if (! file_exists($this->filePath)) {
            mkdir($this->filePath);
        }
    }

    /** @test */
    public function testItWritesToFile(): void
    {
        $fileManager = new FileManager($this->filePath . '/test.txt');
        $fileManager->appendToFile('This is a test');

        $this->assertFileExists($this->filePath . '/test.txt');
        $this->assertStringContainsString('This is a test', $fileManager->readFile());
    }

    /** @test */
    public function testItRemovesFiles(): void
    {
        $fileManager = new FileManager($this->filePath . '/test.txt');
        $fileManager->appendToFile('This file is going to be removed');
        $fileManager->deleteFile();

        $this->assertFileDoesNotExist($this->filePath . '/test.txt');
    }
}
