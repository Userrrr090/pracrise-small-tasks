<?php

$iUserInputValue = $argv[1]; // string ---> int

//$iUserInputValue = readline('Enter a num: ');

if(is_numeric($iUserInputValue))
    if($iUserInputValue%2 == 1) {// если int
        echo 'Is odd';
    }
    else {
        echo 'Is even';
    }
else{
    echo 'Isn\'t a number';
    }









