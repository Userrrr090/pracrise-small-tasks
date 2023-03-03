<?php
function fillNumberVehicle($numberVehicle): string
{
    return str_pad((string) $numberVehicle, 5, '0', STR_PAD_LEFT);
}

$numberVehicle = 1;
$unluckyVehicleCount = 0;

while ($numberVehicle < 100000){
    if(str_contains(fillNumberVehicle($numberVehicle), '4') || str_contains(fillNumberVehicle($numberVehicle), '13')) {
        $unluckyVehicleCount++;
    }
    $numberVehicle++;
}

var_dump($unluckyVehicleCount);



