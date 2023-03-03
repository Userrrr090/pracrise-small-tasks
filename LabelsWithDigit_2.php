<?php

$iLabelNumber = 1;
$iLabelCount = 0;

for( ; $iLabelNumber < 100000; $iLabelNumber += 1){
    $sFilledLabelNumber = str_pad($iLabelNumber, "5", '0', STR_PAD_LEFT);
    $toArrayLabelNumber = str_split($sFilledLabelNumber);
    if(in_array('2', $toArrayLabelNumber)){
        $iLabelCount += 1;
    }
}

echo $iLabelCount;