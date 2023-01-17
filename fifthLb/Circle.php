<?php

declare(strict_types=1);

class Circle
{
    private $coordOfCenter, $radius;

    public function __construct(private int $first, private int $second, private int $third)
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

    public function test(): bool
    {
        return $this->first === $this->second && $this->first === $this->third;
    }
}

$var = new Circle(5, 10, 5);
//var_dump($var->test());
