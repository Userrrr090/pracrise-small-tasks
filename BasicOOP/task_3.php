<?php

class Employee
{
    private string $name;
    private int $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}

class Student
{
    private string $name;
    private int $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getScholarship(): int
    {
        return $this->scholarship;
    }
}

class UserCollection
{
    private array $employees;
    private array $students;

    public function addNewUser (object $newUser): void
    {
        if($newUser instanceof Employee) {
            $this->employees[] = $newUser;
        }
        if($newUser instanceof Student) {
            $this->students[] = $newUser;
        }
    }

    public function getTotalSalary(): int {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        return $sum;
    }

    public function getTotalScholarship(): int {
        $sum = 0;

        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }
        return $sum;
    }

    public function getTotalPayment(): int {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function getStudents(): array
    {
        return $this->students;
    }
}

$userCollection = new UserCollection();

$userCollection->addNewUser(new Employee('bob', 1200));
$userCollection->addNewUser(new Student('steve', 1400));
$userCollection->addNewUser(new Student('eric', 800));
$userCollection->addNewUser(new Employee('olya', 1900));
$userCollection->addNewUser(new Student('maria', 1100));

echo $userCollection->getTotalSalary();
echo PHP_EOL;
echo $userCollection->getTotalScholarship();
echo PHP_EOL;
echo $userCollection->getTotalPayment();
echo PHP_EOL;

var_dump($userCollection->getEmployees());
var_dump($userCollection->getStudents());