<?php

declare(strict_types=1);

class Circle
{
    public $coordOfCenter, $radius;

    public function __construct(protected int $first, protected int $second, protected int $third)
    {
    }

    public function __toString(): string
    {
        return "«Коло з центром в (х, у) і радіусом radius»";
    }

    public function getFirst()
    {
        return $this->first;
    }

    public function setFirst($first)
    {
        $this->first = $first;
    }

    public function getSecond()
    {
        return $this->second;
    }

    public function setSecond($second)
    {
        $this->second = $second;
    }

    public function getThird()
    {
        return $this->third;
    }

    public function setThird($third)
    {
        $this->third = $third;
    }

}

$var = new Circle(5, 5, 10);
var_dump($var);
