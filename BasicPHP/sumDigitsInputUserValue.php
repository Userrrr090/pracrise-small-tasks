<?php

$iUserInputValue = readline('Enter your value: ');
$sumDigitsUserValue = 0;

$toArrayUserInputValue = str_split($iUserInputValue);

foreach ($toArrayUserInputValue as $item){
    $sumDigitsUserValue += $item;
}
echo $sumDigitsUserValue;
