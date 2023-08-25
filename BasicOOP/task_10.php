<?php

interface iFigure
{
    public function getSquare();
    public function getPerimeter();
}

class Disk implements iFigure
{
    private int $a;


    public function __construct($a)
    {
        $this->a = $a;

    }

    public function getPerimeter()
    {
        return 2 * 3.14 * $this->a;
    }

    public function getSquare()
    {
        return 3.14 * $this->a * $this->a;
    }
}

class FigureCollection
{
    private array $figures;

    public function addFigure (Disk $disk): void
    {
        $this->figures[] = $disk;
    }

    public function getFigures(): array
    {
        return $this->figures;
    }

    public function getTotalPerimeter ()
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }
        return $sum;
    }
}

$user = new Disk(13);
$user2 = new Disk(11);
$user3 = new Disk(12);
$user4 = new Disk(11);

$userCollection = new FigureCollection();
$userCollection->addFigure($user);
$userCollection->addFigure($user2);
$userCollection->addFigure($user3);
$userCollection->addFigure($user4);

echo $userCollection->getTotalPerimeter();