<?php

for($randValue = 0; $randValue < 12; $randValue++) {
    $arrayRandValues[] = mt_rand(-15, 15);
}

$maxIndex = 0;

for($arrValue = 0; $arrValue < 12; $arrValue++) {
    if($arrayRandValues[$maxIndex] <= $arrayRandValues[$arrValue]) {
        $maxIndex = $arrValue;
    }
}

print_r($arrayRandValues);
var_dump($maxIndex);
