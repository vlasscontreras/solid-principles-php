<?php

namespace Vlass\Solid\SingleResponsibility;

use Vlass\Solid\SingleResponsibility\Contracts\FileManager as FileManagerContract;

class FileManager implements FileManagerContract
{
    /**
     * The current file path
     *
     * @var string
     */
    protected string $path;

    /** {@inheritdoc} */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /** {@inheritdoc} */
    public function appendToFile(string $content): FileManagerContract
    {
        file_put_contents($this->path, $content, FILE_APPEND);

        return $this;
    }

    /** {@inheritdoc} */
    public function readFile(): ?string
    {
        return file_get_contents($this->path);
    }

    /** {@inheritdoc} */
    public function deleteFile(): self
    {
        unlink($this->path);

        return $this;
    }
}
