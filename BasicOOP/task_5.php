<?php

class ArraySumHelper
{
    public static function getSum (array $array, int $power): int
    {
        $sum = 0;

        foreach ($array as $item) {
            $sum += pow($item, $power);
        }
        return $sum;
    }
}

echo ArraySumHelper::getSum([7,9,-2,3,4], 2);