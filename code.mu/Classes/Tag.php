<?php

declare(strict_types=1);

include './Interfaces/iTag.php';

/**
 * Class for dynamic formatting tags with HTML.
 */
class Tag implements iTag
{
    private string $name;
    private string $text = '';
    private array $attrs = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get tag name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @inheritDoc
     * @return array
     */
    public function getAttrs(): array
    {
        return $this->attrs;
    }

    /**
     * @inheritDoc
     * @param $name
     */
    public function getAttr($name)
    {
        return $this->attrs[$name] ?? null;
    }

    /**
     * @inheritDoc
     * @return string
     */
    public function show(): string
    {
        return $this->open() . $this->text . $this->close();
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

    /**
     * @inheritDoc
     * @param $text
     * @return Tag
     */
    public function setText($text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adding attribute to tag with or without value
     * @param $name
     * @param $value
     * @return $this
     */
    public function setAttr($name, $value = true): self
    {
        $this->attrs[$name] = $value;
        return $this;
    }

    /**
     * Adding many attributes to tag with value
     * @param $attrs
     * @return $this
     */
    public function setAttrs($attrs): self
    {
        foreach ($attrs as $name => $value) {
            $this->setAttr($name, $value);
        }
        return $this;
    }

    /**
     * Remove parameter from attribute
     * @param $name
     * @return $this
     */
    public function removeAttr($name): self
    {
        unset($this->attrs[$name]);
        return $this;
    }

    /**
     * Adding class to tag
     * @param $className
     * @return $this
     */
    public function addClass($className): self
    {
        if (isset($this->attrs['class'])) {
            $classNames = explode(' ', $this->attrs['class']);

            if (!in_array($className, $classNames)) {
                $classNames[] = $className;
                $this->attrs['class'] = implode(' ', $classNames);
            }
        } else {
            $this->attrs['class'] = $className;
        }

        return $this;
    }

    /**
     * Remove class from tag
     * @param $className
     * @return $this
     */
    public function removeClass($className): \Tag
    {
        if (isset($this->attrs['class'])) {
            $classNames = explode(' ', $this->attrs['class']);

            if (in_array($className, $classNames)) {
                $classNames = $this->removeElem($className, $classNames);
                $this->attrs['class'] = implode(' ', $classNames);
            }
        }

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
                if ($value === true) {
                    $result .= " $name";
                } else {
                    $result .= " $name=\"$value\"";
                }
            }

            return $result;
        } else {
            return '';
        }
    }

    /**
     * Remove one element from tag
     * @param $elem
     * @param $arr
     */
    private function removeElem($elem, $arr)
    {
        $key = array_search($elem, $arr);
        array_splice($arr, $key, 1);

        return $arr;
    }
}
