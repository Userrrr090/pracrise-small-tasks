<?php

for($randValue = 0; $randValue < 4; $randValue++){
    $arrayRandValues[] = rand(10, 99);
    echo $arrayRandValues[$randValue] . " ";
}

for($arrIndex = 0; $arrIndex < 3; $arrIndex++){
    if($arrayRandValues[$arrIndex] >= $arrayRandValues[$arrIndex + 1]) {
        echo "\n" . "Is not an ascending sequence";
        exit();
    }
}
echo "\n" . "The array is constantly ascending";