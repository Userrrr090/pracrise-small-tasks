<?php
function compareArrayParts($array, $arraySize): void {

    $sumLeftPart = 0;
    $sumRightPart = 0;

    for($value = 0; $value < $arraySize/2; $value++) {
        $sumLeftPart += $array[$value];
    }

    for($value = $arraySize/2; $value < $arraySize; $value++) {
        $sumRightPart += $array[$value];
    }

    if($sumLeftPart > $sumRightPart){
        echo "Sum of left-part elements is greater.";
    }
    elseif($sumLeftPart < $sumRightPart){
        echo "Sum of right-part elements is greater.";
    }
    else{
        echo "Sums of parts are equal";
    }
    echo "\nLeft: " . $sumLeftPart . "\nRight: " . $sumRightPart;
    die;
}

$arraySize = "";

while($arraySize < 0 || $arraySize%2 != 0) {
    $arraySize = (int) readline("Enter the size of an array(req: even, positive): ");
}

for ($randValue = 0; $randValue < $arraySize; $randValue++) {
    $arrayRandValues[] = rand(-5, 5);
    //echo $arrayRandValues[$randValue] . " ";
}
echo "\n";

compareArrayParts($arrayRandValues, $arraySize);