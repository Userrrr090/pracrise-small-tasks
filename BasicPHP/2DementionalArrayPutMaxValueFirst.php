<?php

function fillArrayRandoms (): array {
    for($column = 0; $column < 7; $column++) {
        for($row = 0; $row < 6; $row++) {
            $arrayRandValues[$column][$row] = rand(0, 9);
            echo $arrayRandValues[$column][$row] . " ";
        }
        echo "\n";
    }
    return $arrayRandValues;
}

function findGreatestValue ($array):array {
    $maxValue = max($array);
    $maxIndex = array_search("{$maxValue}", $array);

    $newArrayMax = [ array_search("{$maxValue}", $array) => max($array)];

    unset($array[$maxIndex]);

    $resArray = array_merge($newArrayMax, $array);

    return $resArray;
}

$array = fillArrayRandoms();


for($column = 0; $column < 7; $column++) {
        $resArray[] = findGreatestValue($array[$column]);
    }

echo "\nNew array:\n";

for($column = 0; $column < 7; $column++) {
    for($row = 0; $row < 6; $row++) {

        echo $resArray[$column][$row] . " ";
    }
    echo "\n";
}