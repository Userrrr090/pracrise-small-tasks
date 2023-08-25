<?php

for($i = 2; $i < 10; $i++) {
    for($y = $i; $y < 10; $y++){
        $array[] = "$i * $y";
    }
}

print_r($array);

$arrayResult = array_rand($array, 15);
shuffle($arrayResult);

for($i = 0; $i < 15; $i++) {
    echo $array[$arrayResult[$i]] . "\n";
}