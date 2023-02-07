<?php

declare(strict_types=1);

/**
 * Class which calculating difference between 2 dates
 */
class Interval
{
    protected Date $date1;
    protected Date $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    /**
     * Return difference between two days
     * @return int
     */
    public function toDays(): int
    {
        $diff = $this->date1->getDay() - $this->date2->getDay();
        return abs((int)$diff);
    }

    /**
     * Return difference between two months
     * @return int
     */
    public function toMonths(): int
    {
        $diff = $this->date1->getMonth() - $this->date2->getMonth();
        return abs((int)$diff);
    }

    /**
     * Return difference between two years
     * @return int
     */
    public function toYears(): int
    {
        $diff = $this->date1->getYear() - $this->date2->getYear();
        return abs((int)$diff);
    }
}
