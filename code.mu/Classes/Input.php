<?php

declare(strict_types=1);

class Input extends Tag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    public function open(): string
    {
        $inputName = $this->getAttr('name');

        if ($inputName) {
            if (isset($_REQUEST[$inputName])) {
                $value = $_REQUEST[$inputName];
                $this->setAttr('value', $value);
            }
        }
        return parent::open();
    }

    public function __toString(): string
    {
        return $this->open();
    }
}
