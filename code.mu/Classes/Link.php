<?php

declare(strict_types=1);

const CLASS_ACTIVE = 'active';

/**
 * Class for work with link in HTML
 */
class Link extends Tag
{
    public function __construct()
    {
        $this->setAttr('href', '');

        parent::__construct('a');
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function open(): string
    {
        $this->activateSelf();
        return parent::open();
    }

    /**
     * Checking if link is active
     * @return void
     */
    private function activateSelf(): void
    {
        if ($this->getAttr('href') === $_SERVER['REQUEST_URI']) {
            $this->addClass(CLASS_ACTIVE);
        }
    }
}
