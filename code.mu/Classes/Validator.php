<?php

declare(strict_types=1);

class Validator
{
    /**
     * Check is email validate
     * @param $str
     * @return mixed
     */
    public function isEmail($str): mixed
    {
        return filter_var($str, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Check is domain validate
     * @param $str
     * @return mixed
     */
    public function isDomain($str): mixed
    {
        return filter_var($str, FILTER_VALIDATE_DOMAIN);
    }

    /**
     * Check is number in range
     * @param $num
     * @param $from
     * @param $to
     * @return bool
     */
    public function inRange($num, $from, $to): bool
    {
        return $from <= $num && $to > $num;
    }

    /**
     * Check is string in range
     * @param $str
     * @param $from
     * @param $to
     * @return bool
     */
    public function inLength($str, $from, $to): bool
    {
        $length = strlen($str);
        return $from <= $length && $to > $length;
    }
}
