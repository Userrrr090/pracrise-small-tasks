<?php
$seed = 0;

for($column = 0; $column < 5; $column++) {
    for( $row = 0; $row < 8; $row++) {
        $arrayRandValues[$column][$row] = mt_rand(10, 99);
        echo $arrayRandValues[$column][$row] . " ";
    }
    echo "\n";
}


