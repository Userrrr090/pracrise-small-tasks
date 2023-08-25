<?php


$to = 'pavelrakavel@gmail.com';
$subject = 'guestbook';
$message = "Thanks for registering on our site! Feel free to leave comments";
$headers = 'From: Headers';

mail($to, $subject, $message, $headers);