<?php

$lang['lang-eng'] = 'Russian';

$iUserInputWord = readline('Enter a five-letter word-palindrome: ');

if(strlen($iUserInputWord) != 5){
    echo 'Enter a FIVE-letter word!'  . "\n";
}
else{
    $iUserInputWordToLower = strtolower($iUserInputWord);
    if($iUserInputWordToLower[0] == $iUserInputWordToLower[4] && $iUserInputWordToLower[1] == $iUserInputWordToLower[3]){
        echo $iUserInputWord . " is a word-palindrome!";
    }
    else {
        echo $iUserInputWord . " is not a word-palindrome!";
    }
}