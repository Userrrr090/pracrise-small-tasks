<?php

// an = 2 * a(n-1) - 1;

for($a = 2; $a < 10000; $a = 2 * $a - 1 ) {
    echo $a . " ";
}
