<?php

function randValue($a, $b): int {
    return rand($a, $b);
}

$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");

for($i = 0; $i < 20; $i++) {
    $arrayRandValues[] = randValue($a, $b);
}

foreach ($arrayRandValues as $arrayRandValue) {
    echo $arrayRandValue . " ";
}