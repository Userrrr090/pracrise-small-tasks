<?php

$array = [];
$arrayPositive = [];
$arrayNegative = [];
$mainCondition = true;


while($mainCondition) {

    unset($array);
    unset($arrayPositive);
    unset($arrayNegative);

    for($randValue = 0; $randValue < 12; $randValue++) {

        $array[] = rand(-10, 10);

        if ($array[$randValue] == 0) {
            $randValue--;
            array_pop($array);
            continue;
        }

        $arrayPositive = count(array_filter($array, function($value) { return $value > 0; } ));
        $arrayNegative = count(array_filter($array, function($value) { return $value < 0; } ));

    }
    if($arrayPositive == $arrayNegative) {
        break;
    }
}
foreach ($array as $arrayValue) {
    echo $arrayValue . " ";
}

