<?php

declare(strict_types=1);

class ListItem extends Tag
{
    /**
     * Create li tag
     */
    public function __construct()
    {
        parent::__construct('li');
    }
}
