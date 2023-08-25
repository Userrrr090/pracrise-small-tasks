<?php
class Circle
{
    const PI = 3.14; // статическое свойство
    private int $radius; // обычное свойство

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare (): float
    {
        return self::PI * $this->radius * $this->radius;
    }

    public function getCircuit (): float
    {
        return self::PI * 2 * $this->radius;
    }
}

$user = new Circle(10);


echo $user->getSquare();
echo PHP_EOL;
echo $user->getCircuit();

