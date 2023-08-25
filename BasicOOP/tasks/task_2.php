<?php



class User
{
    private string $name;
    private int $age;


    public function __set(string $name, $value): void
    {
        if($name != ' ')
        {
            $this->$name = $value;
        }
    }

    public function __get(string $name)
    {
        if(isset($this->$name))
        {
            return $this->$name;
        }
    }
}

$user = new User();

$user->name = 'bob';
$user->age = 44;

echo $user->name;
echo $user->age;