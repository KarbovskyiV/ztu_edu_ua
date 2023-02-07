<?php

declare(strict_types=1);

interface iFile
{
    public function __construct($filePath);

    /**
     * Path to file
     */
    public function getPath();

    /**
     * File folder
     */
    public function getDir();

    /**
     * File name
     */
    public function getName();

    /**
     * File extension
     */
    public function getExt();

    /**
     * Size of file
     */
    public function getSize();

    /**
     * Get text from file
     */
    public function getText();

    /**
     * Set text in file
     * @param $text
     */
    public function setText($text);

    /**
     * Adding text into end of file
     * @param $text
     */
    public function appendText($text);

    /**
     * Copy file
     * @param $copyPath
     */
    public function copy($copyPath);

    /**
     * Delete file
     */
    public function delete();

    /**
     * Rename file
     * @param $newName
     */
    public function rename($newName);

    /**
     * Move file
     * @param $newPath
     */
    public function replace($newPath);
}
