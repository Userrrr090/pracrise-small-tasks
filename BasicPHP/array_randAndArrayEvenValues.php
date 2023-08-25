<?php

function fillArrayRands ($arraySize) {
    for($randValue = 0; $randValue < $arraySize; $randValue++) {
        $arrayRandValues[] = rand(0, $arraySize);
        echo $arrayRandValues[$randValue] . " ";
    }
    return $arrayRandValues;
}

$arraySize = 1;
while($arraySize < 4) {
    $arraySize = (int) readline('Enter a num greater than 3: ');
}

$arrayRandValues = fillArrayRands($arraySize);

$arrayPositiveValues = array_filter($arrayRandValues, function ($positiveValues) {
    if($positiveValues%2 == 0 && $positiveValues != 0)
        return $positiveValues;});

print_r($arrayPositiveValues);