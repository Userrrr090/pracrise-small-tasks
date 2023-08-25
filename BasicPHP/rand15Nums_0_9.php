<?php

$countEvenNum = 0;

for($randNum = 0; $randNum < 15; $randNum++){
    $arrayRandNums[] = rand(0,9);
}

foreach ($arrayRandNums as $arrayRandNum) {
    echo $arrayRandNum . " ";
    if($arrayRandNum%2==0 && $arrayRandNum!=0){
        $countEvenNum += 1;
    }
}

echo "\n" . $countEvenNum;