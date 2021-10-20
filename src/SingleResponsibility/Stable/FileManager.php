<?php

namespace Vlass\Solid\SingleResponsibility\Stable;

class FileManager
{
    /**
     * Set up the file manager.
     *
     * @param  string  $path  Path to where the file should be written/created.
     */
    public function __construct(protected string $path)
    {
        $this->path = $path;
    }

    /**
     * Append content to the file.
     *
     * @param   string  $content  Content to be written to the file.
     * @param   bool    $newLine  Insert new line at the end of the input.
     * @return  self
     */
    public function appendToFile(string $content, bool $newLine = true): self
    {
        if ($newLine) {
            $content = $content . PHP_EOL;
        }

        file_put_contents($this->path, $content, FILE_APPEND);

        return $this;
    }

    /**
     * Read the contents of the current file.
     *
     * @return  string|null
     */
    public function readFile(): ?string
    {
        return file_get_contents($this->path);
    }

    /**
     * Delete the current file.
     *
     * @return  self
     */
    public function deleteFile(): self
    {
        unlink($this->path);

        return $this;
    }
}
