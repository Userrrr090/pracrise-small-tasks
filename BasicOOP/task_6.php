<?php

class Num
{
    public static float $pi = 3.14;

    public static function getSquare ($radius):float
    {
        return self::$pi * $radius * $radius;
    }

    public static function getLength ($radius):float
    {
        return self::$pi * 2 * $radius;
    }

    public static function getVolume ($radius):float
    {
        return self::$pi * 4 * pow($radius, 3) / 3;
    }
}

echo Num::getVolume(10);