<?php

$arrayRange = (int) readline("Enter the range of the array: ");
$arrayFibonacci = [1,1];

for($arrValue = 2; $arrValue < $arrayRange; $arrValue++) {
    $arrayFibonacci[$arrValue] = $arrayFibonacci[$arrValue - 2] + $arrayFibonacci[$arrValue - 1];
}

print_r($arrayFibonacci);