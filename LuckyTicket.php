<?php

$ticketNumber = 1;
$luckyTicketCount = 0;

while ($ticketNumber < 1000000){
    $filledTicketNumber = str_pad($ticketNumber, 6, '0', STR_PAD_LEFT);
    $toArrayTicketNumber = str_split($filledTicketNumber);

    if(($toArrayTicketNumber[0]+$toArrayTicketNumber[1]+$toArrayTicketNumber[2]) == ($toArrayTicketNumber[3]+$toArrayTicketNumber[4]+$toArrayTicketNumber[5])){
        $luckyTicketCount += 1;
    }

    $ticketNumber += 1;
}

echo $luckyTicketCount;