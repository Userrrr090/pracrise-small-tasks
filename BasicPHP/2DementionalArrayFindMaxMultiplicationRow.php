<?php

function fillArrayRandoms (): array {
    for($column = 0; $column < 4; $column++) {
        for($row = 0; $row < 7; $row++) {
            $arrayRandValues[$column][$row] = rand(-5,5);
        }
    }
    return $arrayRandValues;
}

$array = fillArrayRandoms();

$maxMultiplication = 1;
$currentMultiplication = 1;
for($column = 0; $column < 4; $column++) {
    for($row = 0; $row < 7; $row++) {
        $currentMultiplication *= abs($array[$column][$row]);
    }

    if($maxMultiplication < $currentMultiplication) {
        $maxMultiplication = $currentMultiplication;
        $indexMaxRow = $column;
    }
    $currentMultiplication = 1;
}

echo "\n" . $maxMultiplication . " in the row " . $indexMaxRow;

