<?php

declare(strict_types=1);

include "Human.php";

class Programmer extends Human
{
    protected $experience;
    protected array $programLanguage = [];

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    public function getProgramLanguage(): array
    {
        return $this->programLanguage;
    }

    public function setProgramLanguage(array $programLanguage): void
    {
        $this->programLanguage = $programLanguage;
    }

    public function addLanguage($name)
    {
        $this->programLanguage = $name;
        return array_pop($name);
    }

    public function messageBorn(): string
    {
        return 'Dear programmer... ';
    }

    public function childBorn()
    {
        return $this->messageBorn();
    }

    function cleanRoom()
    {
        return '«Програміст прибирає кімнату»';
    }

    function cleanKitchen()
    {
        return '«Програміст прибирає кухню»';
    }
}

$var = new Programmer();
//$var->addLanguage([
//    'PHP',
//    'C++',
//]);
//echo $var->childBorn();
//echo $var->cleanKitchen();
//var_dump($var->getProgramLanguage());
