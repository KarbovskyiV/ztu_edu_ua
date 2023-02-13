<?php

declare(strict_types=1);

class Hidden extends Input
{
    public function __construct()
    {
        $this->setAttr('type', 'hidden');
        parent::__construct();
    }
}
