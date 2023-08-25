<?php


$fileStream = fopen('dataForm.txt', "r");

while (!feof($fileStream)){

    $fileString = fgets($fileStream);
    $array = explode(" ", $fileString);


    if(empty($array))
        break;

    var_dump($array[0]);
    var_dump($array[1]);

}

fclose($fileStream);

echo "hey";