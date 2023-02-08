<?php

declare(strict_types=1);

/**
 * Class for dynamic formatting tags with HTML.
 */
class Tag
{
    private $name;
    private $attrs = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Adding attribute to tag with value
     * @param $name
     * @param $value
     * @return $this
     */
    public function setAttr($name, $value): self
    {
        $this->attrs[$name] = $value;
        return $this;
    }

    /**
     * Remove parameter from attribute
     * @param $name
     * @return $this
     */
    public function removeAttr($name): self
    {
        $this->attrs[$name] = '';
        return $this;
    }

    /**
     * Adding attribute to tag
     * @param $attrs
     * @return string
     */
    private function getAttrsStr($attrs): string
    {
        if (!empty($attrs)) {
            $result = '';

            foreach ($attrs as $name => $value) {
                $result .= " $name=\"$value\"";
            }

            return $result;
        } else {
            return '';
        }
    }

    /**
     * Echoing opened part of tag
     * @return string
     */
    public function open(): string
    {
        $name = $this->name;
        $attrsStr = $this->getAttrsStr($this->attrs);

        return "<$name$attrsStr>";
    }

    /**
     * Echoing closed part of tag
     * @return string
     */
    public function close(): string
    {
        $name = $this->name;
        return "</$name>";
    }
}
