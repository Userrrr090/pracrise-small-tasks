<?php

for($column = 0; $column < 5; $column++) {
    for($row = 0; $row < 8; $row++) {
        $arrayRandValues[$column][$row] = rand(-99, 99);
        echo $arrayRandValues[$column][$row] . " ";
    }
    echo "\n";
}

$maxValue = $arrayRandValues[0][0];

for($column = 0; $column < 5; $column++) {
    for($row = 0; $row < 8; $row++) {
        if($maxValue < $arrayRandValues[$column][$row]){
            $maxValue = $arrayRandValues[$column][$row];
        }
    }
}

echo $maxValue;