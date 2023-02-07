<?php

declare(strict_types=1);

/**
 * Class for work with date
 */
class Date
{
    protected false|DateTime $date;

    /**
     * If the date is not transferred - let the current one be taken
     */
    public function __construct($date = null)
    {
        if (is_null($date)) {
            $this->date = date_create();
        } else {
            $this->date = date_create($date);
        }
    }

    /**
     * Return day
     * @return string
     */
    public function getDay(): string
    {
        return $this->date->format('d');
    }

    /**
     * Return month, accept 'ua' or 'en',
     * @param null $lang
     * @return string
     */
    public function getMonth($lang = null): string
    {
        if (is_null($lang)) {
            return $this->date->format('m');
        }

        $lang = strtolower($lang);
        $match = $this->date->format('m');

        if ($lang === 'ua') {
            echo match ((int)$match) {
                1 => 'січень',
                2 => 'лютий',
                3 => 'березень',
                4 => 'квітень',
                5 => 'травень',
                6 => 'червень',
                7 => 'липень',
                8 => 'серпень',
                9 => 'вересень',
                10 => 'жовтень',
                11 => 'листопад',
                12 => 'грудень',
                default => null,
            };
        } elseif ($lang === 'en') {
            echo match ((int)$match) {
                1 => 'january',
                2 => 'february',
                3 => 'march',
                4 => 'april',
                5 => 'may',
                6 => 'june',
                7 => 'july',
                8 => 'august',
                9 => 'september',
                10 => 'october',
                11 => 'november',
                12 => 'december',
                default => null,
            };
        } else {
            echo 'The specified language is not available';
        }
        // що тут писать щоб шторм не сварився? чи без ретурна ок?
    }

    /**
     * Return year
     * @return string
     */
    public function getYear(): string
    {
        return $this->date->format('Y');
    }

    /**
     * Return day of week, accept 'ua' or 'en'
     * @param null $lang
     * @return string|void
     */
    public function getWeekDay($lang = null)
    {
        if (is_null($lang)) {
            return $this->date->format('N');
        }

        $lang = strtolower($lang);
        $match = $this->date->format('N');

        if ($lang === 'ua') {
            echo match ((int)$match) {
                1 => 'понеділок',
                2 => 'вівторок',
                3 => 'середа',
                4 => 'четверг',
                5 => "п'ятниця",
                6 => 'суббота',
                7 => 'неділя',
                default => null,
            };
        } elseif ($lang === 'en') {
            echo match ((int)$match) {
                1 => 'monday',
                2 => 'tuesday',
                3 => 'wednesday',
                4 => 'thursday',
                5 => 'friday',
                6 => 'saturday',
                7 => 'sunday',
                default => null,
            };
        } else {
            echo 'The specified language is not available';
        }
    }

    /**
     * Add value to day
     * @param $value
     * @return Date
     */
    public function addDay($value): Date
    {
        date_modify($this->date, "+$value day");
        date_format($this->date, "Y-m-d");
        return $this;
    }

    /**
     * Subtracts value from the day
     * @param $value
     * @return Date
     */
    public function subDay($value): Date
    {
        date_modify($this->date, "-$value day");
        date_format($this->date, "Y-m-d");
        return $this;
    }

    /**
     * Add value to month
     * @param $value
     * @return Date
     */
    public function addMonth($value): Date
    {
        $dt = $this->date;
        $day = $dt->format('j');
        $dt->modify("first day of +$value month");
        $dt->modify('+' . (min($day, $dt->format('t')) - 1) . ' days');
        $dt->format('Y-m-d');
        return $this;
    }

    /**
     * Subtracts value from the month
     * @param $value
     * @return Date
     */
    public function subMonth($value): Date
    {
        $dt = $this->date;
        $day = $dt->format('j');
        $dt->modify("first day of -$value month");
        $dt->modify('+' . (min($day, $dt->format('t')) - 1) . ' days');
        $dt->format('Y-m-d');
        return $this;
    }

    /**
     * Add value to year
     * @param $value
     * @return Date
     */
    public function addYear($value): Date
    {
        date_modify($this->date, "+$value year");
        date_format($this->date, "Y-m-d");
        return $this;
    }

    /**
     * Subtracts value from the year
     * @param $value
     * @return Date
     */
    public function subYear($value): Date
    {
        date_modify($this->date, "-$value year");
        date_format($this->date, "Y-m-d");
        return $this;
    }

    /**
     * Return data in specified format
     * @param $format
     * @return string
     */
    public function format($format): string
    {
        return date_format($this->date, $format);
    }

    /**
     * Echo data in 'year-month-day' format
     * @return string
     */
    public function __toString()
    {
        return date_format($this->date, 'Y-m-d');
    }
}
