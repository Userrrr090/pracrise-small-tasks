<?php
function correctHours($hours): string
{
    return str_pad((string) $hours, 2, '0', STR_PAD_LEFT);
}

function correctReverseMinutes($minutes): string // revers for comparing to $hours
{
    return  strrev(str_pad((string)$minutes, 2, '0', STR_PAD_LEFT));

}

function correctMinutes($minutes): string{ // for printing in the right format (03 minutes, not 3 minutes)
    return str_pad((string)$minutes, 2, '0', STR_PAD_LEFT);
}

$minutes = 0;
$hours = 0;
$symmetricTimeCount = [];

while ($hours < 24){
    for ( ; $minutes < 60; $minutes++){
        if(correctHours($hours) == correctReverseMinutes($minutes)){ // h=01 m=01 // h=01 m=10
            $symmetricTimeCount[] = correctHours($hours) . ":" . correctMinutes($minutes);
        }
    }
    $hours++;
    $minutes = 0;
}
foreach ($symmetricTimeCount as $item) {
    echo $item . "\n";
}