<?php

$to = 'pavelrakavel@gmail.com';
$subject = 'for_php';

$first_msg = 'Stove';
$second_msg = 'Oven';
$third_msg = 'Rubbish bin';
$fourth_msg = 'Towel';

$the_msg = $first_msg . ' ' . $third_msg . ' ' . $fourth_msg . "\n" . $second_msg;
echo $the_msg;

$headers = 'From: Userrr';

mail( $to, $subject, $the_msg, $headers);