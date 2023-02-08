<?php

declare(strict_types=1);

include './Interfaces/iFile.php';

/**
 * Class for work with files
 */
class File implements iFile
{

    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    // шо тут робити з коментами? типу вони є в інтерфесі, логіка ж не змінюється методу, add return

    /**
     * @inheritDoc
     * @return string
     */
    public function getPath(): string
    {
        return realpath($this->filePath);
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function getDir(): string
    {
        return pathinfo($this->filePath, PATHINFO_DIRNAME);
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function getName(): string
    {
        return pathinfo($this->filePath, PATHINFO_FILENAME);
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function getExt(): string
    {
        return pathinfo($this->filePath, PATHINFO_EXTENSION);
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function getSize(): string
    {
        return $this->filePath . ': ' . filesize($this->filePath) . ' bytes.';
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function getText(): string
    {
        return file_get_contents($this->filePath);
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function setText($text): string
    {
        file_put_contents($this->filePath, $text);
        return "$this->filePath with '$text' successfully recorded";
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function appendText($text): string
    {
        file_put_contents($this->filePath, $text . PHP_EOL, FILE_APPEND | LOCK_EX);
        return "$this->filePath with '$text' successfully appended";
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function copy($copyPath): string
    {
        copy($this->filePath, $copyPath);
        return "$this->filePath successfully copied into $copyPath";
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function delete(): string
    {
        unlink($this->filePath);
        return "$this->filePath successfully deleted";
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function rename($newName): string
    {
        rename($this->filePath, $newName);
        return "$this->filePath successfully renamed to $newName";
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function replace($newPath): string
    {
        move_uploaded_file($this->filePath, $newPath);
        return "$this->filePath successfully moved to $newPath";
    }
}
