<?php

function protectionInvalidValues($iUserInputValue): bool
{
    if(is_numeric($iUserInputValue)){
        if(is_int($iUserInputValue/1)){
            return true;
        }
    }
    return false;
}

$iUserInputValue = readline('Enter your value: ');
$divider = 2;

if(protectionInvalidValues($iUserInputValue)){
    while($divider <= sqrt($iUserInputValue)){
        if($iUserInputValue%$divider == 0){
            echo $iUserInputValue . ' is a composite number!';
            exit;
        }
        $divider += 1;
    }
    echo $iUserInputValue . ' is prime number!';
}
else {
    echo $iUserInputValue . ' is nut an integer!';
}