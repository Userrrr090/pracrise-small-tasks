<?php

session_start();

$result = $_SESSION['val_1'] + $_SESSION['val_2'];
echo "SUM: " . $result;