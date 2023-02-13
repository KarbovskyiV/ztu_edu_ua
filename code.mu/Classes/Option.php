<?php

declare(strict_types=1);

class Option extends Tag
{
    public function __construct()
    {
        parent::__construct('option');
    }

    /**
     * Set selected attribute
     * @return $this
     */
    public function setSelected(): self
    {
        $this->setAttr('selected');

        return $this;
    }
}
