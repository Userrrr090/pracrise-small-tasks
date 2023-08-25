<?php


function checkLoginValues($email, $password): bool
{
    $fileStream = fopen("dataForm.txt", "r");

    while (!feof($fileStream)){

        $fileString = fgets($fileStream);
        $arrayFileString = explode(" ", $fileString);

        if(empty($arrayFileString))
            break;


        if($arrayFileString[0] == $email && $arrayFileString[1] == $password){
            fclose($fileStream);
            return true;
        }
    }

    fclose($fileStream);
    return false;
}


$welcomeString = "";

if (!empty($_POST["loginEmail"]) && !empty($_POST["logPass"])) {
    $email = $_POST["loginEmail"];
    $password = $_POST["logPass"];

    if(checkLoginValues($email, $password)) {
        $welcomeString = "Welcome";
    }
    else {
        $welcomeString = "Ensure you filled the form correctly";
    }

}
else {
    $welcomeString = "Fill out the form correctly";
}

echo $welcomeString;