<?php

interface iUser
{
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}

interface iEmployee extends iUser
{
    public function getSalary();
    public function setSalary($salary);
}

class Employee implements iEmployee
{
    private string $name;
    private int $age;
    private int $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}

$emp = new Employee();
