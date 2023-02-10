<?php

declare(strict_types=1);

class HtmlList extends Tag
{
    private array $items = [];

    /**
     * Add list item
     * @param ListItem $li
     * @return HtmlList
     */
    public function addItem(ListItem $li): self
    {
        $this->items[] = $li;
        return $this;
    }

    /**
     * Return opened tag, tag 'li' and closed tag
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
