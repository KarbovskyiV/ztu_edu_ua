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

    public function messageBorn(): string
    {
        return 'Dear student... ';
    }

    public function childBorn()
    {
        return $this->messageBorn();
    }

    function cleanRoom()
    {
        return '«Студент прибирає кімнату»';
    }

    function cleanKitchen()
    {
        return '«Студент прибирає кухню»';
    }
}

$var = new Student();
$var->setCourse(1);
$var->nextCourse();
//echo $var->childBorn();
//echo $var->cleanKitchen();
//var_dump($var);
