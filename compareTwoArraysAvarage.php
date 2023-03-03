<?php
function printArray ($array): void
{
    foreach ($array as $item) {
        echo $item . " ";
    }
    echo "\n";
}

for($randValue = 0; $randValue < 5; $randValue++){
    $arrayRandValues_1[] = rand(0, 5);
    $arrayRandValues_2[] = rand(0, 5);
}

printArray($arrayRandValues_1);
printArray($arrayRandValues_2);

if(array_sum($arrayRandValues_1)/5 > array_sum($arrayRandValues_2)/5){
    echo "Average of the first array is bigger: " . array_sum($arrayRandValues_1)/5;
}
elseif (array_sum($arrayRandValues_1)/5 == array_sum($arrayRandValues_2)/5){
    echo "Averages of the arrays are equal: " . array_sum($arrayRandValues_1)/5;
}
else {
    echo "Average of the second array is bigger: " . array_sum($arrayRandValues_2)/5;
}
