<?php

$iUserInputValue = readline('Enter a number: ');
$iUserValueToFactorial = 1;

if(is_numeric($iUserInputValue)){
    if(is_int($iUserInputValue/1)){
        for(; $iUserInputValue >= 1; $iUserInputValue--) {
            $iUserValueToFactorial *= $iUserInputValue;
        }
        echo $iUserValueToFactorial;
    }
    else {
        echo 'Enter an integer';
    }
}
else {
    echo 'Enter an integer';
}
