<?php

declare(strict_types=1);

interface iTag
{
    /**
     * Get tag name
     */
    public function getName();

    /**
     * Get tag text
     */
    public function getText();

    /**
     * Get all attributes
     */
    public function getAttrs();

    /**
     * Get one attribute by name
     * @param $name
     */
    public function getAttr($name);

    /**
     * Opened tag, text and closed tag together
     */
    public function show();

    /**
     * Opened part of tag
     */
    public function open();

    /**
     * Closed part of tag
     */
    public function close();

    /**
     * Set text into atrribute
     * @param $text
     */
    public function setText($text);

    /**
     * Set one attribute into tag
     * @param $name
     * @param $value
     */
    public function setAttr($name, $value = true);

    /**
     * Set attributes into tag
     * @param $attrs
     */
    public function setAttrs($attrs);

    /**
     * Remove attribute
     * @param $name
     */
    public function removeAttr($name);

    /**
     * Add class to tag
     * @param $className
     */
    public function addClass($className);

    /**
     * Remove class from tag
     * @param $className
     */
    public function removeClass($className);
}
