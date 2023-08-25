<?php

for($randNum = 0; $randNum < 8; $randNum++){
    $arrayRandNums[] = rand(0, 10);
}

foreach ($arrayRandNums as $arrayRandNum) {
    echo $arrayRandNum . " ";
}
echo "\n";

for($oddIndex = 0; $oddIndex < count($arrayRandNums); $oddIndex+=2){
    $arrayRandNums[$oddIndex] = 0;
}

foreach ($arrayRandNums as $arrayRandNum) {
    echo $arrayRandNum . " ";
}