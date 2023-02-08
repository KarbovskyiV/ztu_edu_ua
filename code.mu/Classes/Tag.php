<?php

declare(strict_types=1);

/**
 * Class for dynamic formatting tags with HTML.
 */
class Tag
{
    /**
     * Property tag name
     * @var $name
     */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Echoing opened part of tag
     * @return string
     */
    public function open(): string
    {
        $name = $this->name;
        return "<$name>";
    }

    /**
     * Echoing closed part of tag
     * @return string
     */
    public function close(): string
    {
        $name = $this->name;
        return "</$name>";
    }
}

