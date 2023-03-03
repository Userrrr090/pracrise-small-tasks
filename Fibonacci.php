<?php

$aFibonacciValues = [1, 1];

for($i = 0; $i < 11; $i++){
    $aFibonacciValues[] = $aFibonacciValues[$i] + $aFibonacciValues[$i+1];
}

foreach ($aFibonacciValues as $aFibonacciValue) {
    echo $aFibonacciValue . " ";
}