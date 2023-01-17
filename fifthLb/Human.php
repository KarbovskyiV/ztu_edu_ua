<?php

declare(strict_types=1);

include "cleanHouse.php";
abstract class Human implements cleanHouse
{
    protected $height, $weight, $age;

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    protected function messageBorn(): string
    {
        return 'The child was born';
    }

    abstract public function childBorn();
}
