<?php

declare(strict_types=1);

class OLHtml extends HtmlList
{
    public function __construct()
    {
        parent::__construct('ol');
    }

    public function __toString(): string
    {
        return $this->show();
    }
}
