<?php

declare(strict_types=1);

/**
 * Class used to create HTML tags
 */
class TagHelper
{
    /**
     * Echoing opened part of tag
     * @param $name
     * @param array $attrs
     * @return string
     */
    public function open($name, array $attrs = []): string
    {
        $attrsStr = $this->getAttrsStr($attrs);
        return "<$name$attrsStr>";
    }

    /**
     * Echoing closed part of tag
     * @param $name
     * @return string
     */
    public function close($name): string
    {
        return "</$name>";
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
     * Opened tag, text and closed tag together
     * @param $name
     * @param $text
     * @return string
     */
    public function show($name, $text): string
    {
        return $this->open($name) . $text . $this->close($name);
    }
}
