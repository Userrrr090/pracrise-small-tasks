<?php

for($randValue = 0; $randValue < 10; $randValue++) {
    $arrayRandValues_1[] = rand(1, 9);
    $arrayRandValues_2[] = rand(1, 9);
    $arrayRandValues_3[] = $arrayRandValues_1[$randValue] / $arrayRandValues_2[$randValue];
}

print_r($arrayRandValues_3);

for($value = 0; $value < 10; $value++) {
    $currentValue = $arrayRandValues_3[$value];
    if(is_int($currentValue)){
        echo $currentValue . " ";
    }
}