<?php

declare(strict_types=1);

class Textarea extends Tag
{
    public function __construct()
    {
        parent::__construct('textarea');
    }

    /**
     * @inheritDoc
     * Text into textarea don't disappear
     * @return string
     */
    public function open(): string
    {
        $inputName = $this->getAttr('name');

        if ($inputName) {
            if (isset($_REQUEST[$inputName])) {
                $value = $_REQUEST[$inputName];
                $this->setText($value);
            }
        }
        return parent::open();
    }
}
