<?php

function toFileFromForm ($email, $password, $firstName, $lastName, $age) : void
{

    $fileStream = fopen("dataForm.txt", "a");
    fwrite($fileStream, $email . " " . $password . " " . $firstName . " " . $lastName . " " . $age . "\n");
    fclose($fileStream);
}


$welcomeString = "";

if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["age"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = (int)$_POST["age"];

    if ($age >= 18) {
        $welcomeString = "Welcome, " . $firstName . " " . $lastName . "!" . " You are allowed to enter.";
        toFileFromForm($email, $password, $firstName, $lastName, $age);

    } else {
        $welcomeString = "Hello, " . $firstName . " " . $lastName . "!" . " You are not allowed to enter. Welcome back in " . 18 - $age . " years.";
    }
}
else {
    $welcomeString = "Ensure you filled the form";
}


echo $welcomeString;

