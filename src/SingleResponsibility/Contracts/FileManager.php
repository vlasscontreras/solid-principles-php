<?php

namespace Vlass\Solid\SingleResponsibility\Contracts;

interface FileManager
{
    /**
     * Set up the file manager.
     *
     * @param  string  $path  Path to where the file should be written/created.
     */
    public function __construct(string $path);

    /**
     * Append content to the file.
     *
     * @param   string  $content  Content to be written to the file.
     * @param   bool    $newLine  Insert new line at the end of the input.
     * @return  self
     */
    public function appendToFile(string $content, bool $newLine = true): self;

    /**
     * Read the contents of the current file.
     *
     * @return  string|null
     */
    public function readFile(): ?string;

    /**
     * Delete the current file.
     *
     * @return  self
     */
    public function deleteFile(): self;
}
