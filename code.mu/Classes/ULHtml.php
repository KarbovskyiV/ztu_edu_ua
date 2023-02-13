<?php

declare(strict_types=1);

class ULHtml extends HtmlList
{
    public function __construct()
    {
        parent::__construct('ul');
    }

    public function __toString(): string
    {
        return $this->show();
    }
}
