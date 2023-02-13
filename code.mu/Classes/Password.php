<?php

declare(strict_types=1);

class Password extends Input
{
    public function __construct()
    {
        $this->setAttr('type', 'password');
        parent::__construct();
    }
}
