<?php

for($current = 1; $current < 100; $current+=2){
    $arrayOdds[] = $current;
}

foreach ($arrayOdds as $item){
    echo $item . " ";
}
echo "\n";

foreach (array_reverse($arrayOdds) as $item){
    echo $item . " ";
}
