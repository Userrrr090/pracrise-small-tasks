<?php

abstract class User
{
    protected string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    abstract public function increaseRevenue($value);
    abstract public function decreaseRevenue($value);
}

class Student extends User
{
    private int $scholarship;

    /**
     * @return int
     */
    public function getScholarship(): int
    {
        return $this->scholarship;
    }

    /**
     * @param int $scholarship
     */
    public function setScholarship(int $scholarship): void
    {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue($value)
    {
        $this->scholarship += $value;
        // TODO: Implement increaseRevenue() method.
    }

    public function decreaseRevenue($value)
    {
        $this->scholarship -= $value;
        // TODO: Implement decreaseRevenue() method.
    }
}

class Employee extends User
{
    private int $salary;

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function increaseRevenue($value)
    {
        $this->salary += $value;
        // TODO: Implement increaseRevenue() method.
    }

    public function decreaseRevenue($value)
    {
        $this->salary -= $value;
        // TODO: Implement decreaseRevenue() method.
    }
}

$user = new Student();
$user->setScholarship(1400);
echo $user->getScholarship();

$user->decreaseRevenue(300);
echo $user->getScholarship();

$user->increaseRevenue(1800);
echo $user->getScholarship();
