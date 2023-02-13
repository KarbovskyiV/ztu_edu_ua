<?php

declare(strict_types=1);

class Select extends Tag
{
    private array $items = [];

    public function __construct()
    {
        parent::__construct('select');
    }

    /**
     * Add option item
     * @return $this
     */
    public function add(Option $option): self
    {
        $this->items[] = $option;
        return $this;
    }

    /**
     * Return opened tag, tag 'option' and closed tag
     * @return string
     */
    public function show(): string
    {
        $result = $this->open();

        foreach ($this->items as $item) {
            $result .= $item->show();
        }

        $result .= $this->close();

        return $result;
    }
}
