<?php
$iUserInputValue = readline('Enter your number: ');
$aDividersUserValue = [];

if (is_numeric($iUserInputValue)) { // is it a number at all? *Protection from invalid input values*
    if (is_int($iUserInputValue / 1)) { // is it a float or an integer?  *Protection from float values*

        while ($iUserInputValue != 1) { // here we go to find dividers
            for ($divider = 2; $divider <= $iUserInputValue; $divider++) {
                if ($iUserInputValue % $divider == 0) {
                    $iUserInputValue /= $divider;

                    if (!in_array($divider, $aDividersUserValue)) { // write down to list of dividers
                        $aDividersUserValue[] = $divider;
                    }

                }
            }
        }

    }
}

foreach ($aDividersUserValue as $item) {
    echo $item . " ";
}
//var_dump($aDividersUserValue);
