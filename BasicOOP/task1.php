<?php

class User
{
    private string $name;
    private string $surname;

    public function __construct ($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

}

class Student extends User
{
    private int $age;

    public function __construct($name, $surname, $birthday)
    {
        parent::__construct($name, $surname);
        $this->calculateAge($birthday);
    }

    private function calculateAge ($birthday)
    {
        if ((int)$birthday[1] <= (int)date('m') && (int)$birthday[0] <= (int)date('d')) {
            $this->age = 2023 - $birthday[2];
        } else {
            $this->age = 2023 - $birthday[2] - 1;
        }
    }

    public function getAge(): int
    {
        return $this->age;
    }

}

$oStudent = new Student('Bob', 'Fisher', [20,04,1999]);

echo $oStudent->getName();
echo $oStudent->getSurname();
echo $oStudent->getAge();

