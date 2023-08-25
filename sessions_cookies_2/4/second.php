<?php

session_start();

echo 'first name: ' . $_SESSION['firstName'] . '<br>';
echo 'last name: ' . $_SESSION['lastName'] . '<br>';
echo 'age: ' . $_SESSION['age'] . '<br>';
