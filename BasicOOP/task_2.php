<?php

class User
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

class UserCollection
{
    private array $users = [];

    public function addUser($newUser): void
    {
        if (!$this->exists($newUser)) {
            $this->users[] = $newUser;
        }
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    private function exists($newUser): bool
    {
        if(in_array($newUser, $this->users)) {
            return true;
        }
        return false;
    }
}

$userCollection = new UserCollection();
$userCollection->addUser(new User('Bob', 42));
$userCollection->addUser(new User('Steve', 42));

var_dump($userCollection->getUsers());