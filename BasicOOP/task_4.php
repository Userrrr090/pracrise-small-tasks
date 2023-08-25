<?php

class Post
{
    private string $name;
    private int $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }
}

class Employee
{
    private string $name;
    private string $surname;
    private object $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

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

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getPost(): string
    {
        return $this->post->getName();
    }

    public function getSalary(): int
    {
        return $this->post->getSalary();
    }

    public function changePost (Post $newPost):void {
        $this->post = $newPost;
    }
}

$driver = new Post('driver', 2300);
$programmer = new Post('programmer', 1700);
$manager = new Post('manager', 1300);

$user1 = new Employee('bob', 'fisher', $driver);
$user2 = new Employee('steve', 'james', $programmer);
$user3 = new Employee('eric', 'smith', $manager);

$arr = [$user1, $user2, $user3];

foreach ($arr as $item) {
    echo $item->getName() . " " . $item->getSurname() . " " . $item->getPost() . " " . $item->getSalary() . "\n";
}

$user3->changePost($programmer);

foreach ($arr as $item) {
    echo $item->getName() . " " . $item->getSurname() . " " . $item->getPost() . " " . $item->getSalary() . "\n";
}