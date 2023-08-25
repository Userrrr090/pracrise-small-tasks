<?php

function randValue($a, $b): int
{
    return rand($a, $b);
}

function printArray($array): void
{
    foreach ($array as $item) {
        echo $item . " ";
    }
    echo "\n";
}

function sortArray ($array): array {
    for($y = 0; $y < count($array); $y++) {
        for($i = 0; $i < count($array) - 1; $i++) {
            if($array[$i] > $array[$i+1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i+1];
                $array[$i+1] = $temp;
            }
        }
    }
    return $array;
}

$a = readline("First number: ");
$b = readline("Second number: ");

for ($i = 0; $i < 10; $i++) {
    $arrayFirst[] = randValue($a, $b);
    $arraySecond[] = randValue($a, $b);
    $arrayThird[] = randValue($a, $b);
    $arrayForth[] = randValue($a, $b);
    $arrayFifth[] = randValue($a, $b);
}

printArray(sortArray($arrayFirst));
printArray(sortArray($arraySecond));
printArray(sortArray($arrayThird));
printArray(sortArray($arrayForth));
printArray(sortArray($arrayFifth));