<?php

function randValue ($a, $b):int {
    return rand($a, $b);
}

function printArray ($array): void {
    foreach ($array as $item) {
        echo $item . " ";
    }
    echo "\n";
}

$a = readline("First number: ");
$b = readline("Second number: ");

for($i = 0; $i< 10; $i++) {
    $arrayFirst[] = randValue($a, $b);
    $arraySecond[] = randValue($a, $b);
    $arrayThird[] = randValue($a, $b);
    $arrayForth[] = randValue($a, $b);
    $arrayFifth[] = randValue($a, $b);
}

printArray($arrayFirst);
printArray($arraySecond);
printArray($arrayThird);
printArray($arrayForth);
printArray($arrayFifth);