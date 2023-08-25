<?php

for($randValue = 0; $randValue < 11; $randValue++) {
    $arrayRandValues[] = rand(-1, 1);
    echo $arrayRandValues[$randValue] . " ";
}
echo "\n";

$tmp = array_count_values($arrayRandValues);
$max = max($tmp);


$result = array_search($max, $tmp);
echo "The most common value \"" . $result . "\" was found " . $max . " times.";