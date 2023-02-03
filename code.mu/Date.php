<?php

declare(strict_types=1);

/**
 * Class for work with date
 */
class Date
{
    protected $date;

    public function __construct($date = null)
    {
//        if (is_null($date)) {
//            $this->date = date('Y-m-d');
//        } else {
//            $this->date = $date;
//        }
        // if the date is not transferred - let the current one be taken
    }

    public function getDay()
    {
//        return date('d', strtotime($this->date));
        // return day
    }

    public function getMonth($lang = null)
    {
//        return date('m', strtotime($this->date));
        // возвращает месяц

        // переменная $lang может принимать значение ua или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
    }

    public function getYear()
    {
//        return date('Y', strtotime($this->date));
        // return year
    }

    public function getWeekDay($lang = null)
    {
        // возвращает день недели

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть день будет словом на заданном языке
    }

    public function addDay($value)
    {
        // добавляет значение $value к дню
    }

    public function subDay($value)
    {
        // отнимает значение $value от дня
    }

    public function addMonth($value)
    {
        // добавляет значение $value к месяцу
    }

    public function subMonth($value)
    {
        // отнимает значение $value от месяца
    }

    public function addYear($value)
    {
        // добавляет значение $value к году
    }

    public function subYear($value)
    {
        // отнимает значение $value от года
    }

    public function format($format)
    {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
    }

    public function __toString()
    {
        // выведет дату в формате 'год-месяц-день'
    }
}
