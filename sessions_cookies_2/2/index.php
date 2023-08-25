<?php

session_start();

if(!$_SESSION['firstVisit']) {
    $_SESSION['firstVisit'] = time();
}


$diffSeconds = time() - $_SESSION['firstVisit'];
echo 'Seconds since first visit: ' . $diffSeconds;
