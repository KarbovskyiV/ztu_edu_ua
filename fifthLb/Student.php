<?php

declare(strict_types=1);

include "Human.php";

class Student extends Human
{
    protected $nameUniversity, $course;

    public function getNameUniversity()
    {
        return $this->nameUniversity;
    }

    public function setNameUniversity($nameUniversity): void
    {
        $this->nameUniversity = $nameUniversity;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function nextCourse()
    {
        return $this->course++;
    }
}

$var = new Student();
$var->setCourse(1);
$var->nextCourse();
var_dump($var);
