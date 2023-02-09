<?php

declare(strict_types=1);

/**
 * Class for work with image
 */
class Image extends Tag
{
    public function __construct()
    {
        $this->setAttr('src', '')->setAttr('alt', '');

        parent::__construct('img');
    }

    /**
     * Automatically call open tag
     * @return string
     */
    public function __toString(): string
    {
        return $this->open();
    }
}
