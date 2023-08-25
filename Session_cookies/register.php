<?php

session_start();


//TODO handle form data for registration

if(!empty($_POST['email']) && !empty($_POST['password'])){

    $dbConfig = require_once 'dbConfig.php';
    $dbConnect = mysqli_connect(
            $dbConfig['host'],
            $dbConfig['user'],
            $dbConfig['password'],
            $dbConfig['name']
    );
    mysqli_query($dbConnect, "INSERT INTO users (email, password) VALUES (
        '" . $_POST['email'] . "',
        '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "')");
    mysqli_close($dbConnect);

    /*$jsonUser = json_encode([$_POST['email'] => password_hash($_POST['password'], PASSWORD_DEFAULT)]);
    $sUserData = fopen('users.csv', 'a');
    fwrite($sUserData, $jsonUser . "\n");               // TODO !TO FILE SAVE USER DATA!
    fclose($sUserData);*/

    header("Location: /login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <?php require_once 'bootstrap.php'?>

</head>
<body>
<br>

<?php require_once 'menu.php'; ?>

<br>

<p>SIGN UP</p>
<form method="post" class="row g-3">
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
        <input type="text" class="form-control" name="email" id="staticEmail2" placeholder="Email">
    </div>
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword2" placeholder="Password">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
    </div>
</form>
<hr>


</body>
</html>



