<?php

$iUserInputValue = $argv[1] * 1; // string ---> int

if(is_int($iUserInputValue)){
    if($iUserInputValue%2 == 1) // если int
        echo 'Is odd';
    else
        echo 'Is even';
}
else{
    echo 'Isn\'t int';
    }









