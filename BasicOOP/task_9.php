<?php

abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();

    public function getSquarePerimeterSum ()
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}

class Rectangle extends Figure
{
    private int $a;
    private int $b;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare(){
        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return 2 * $this->a + 2 * $this->b;
    }
}

$user = new Rectangle(19,6);

echo $user->getSquare();
echo PHP_EOL;
echo $user->getPerimeter();
echo PHP_EOL;
echo $user->getSquarePerimeterSum();
