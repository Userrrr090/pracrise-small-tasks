<?php

session_start();


//TODO handle form data for login

$info = '';

if(!empty($_POST['email']) && !empty($_POST['password'])) {

    $dbConfig = require_once 'dbConfig.php';
    $dbConnect = mysqli_connect(
        $dbConfig['host'],
        $dbConfig['user'],
        $dbConfig['password'],
        $dbConfig['name']
    );

    $dbResponse = mysqli_query($dbConnect, "SELECT * FROM users");
    $aUsers = mysqli_fetch_all($dbResponse, MYSQLI_ASSOC);
    mysqli_close($dbConnect);

    foreach ($aUsers as $user) {
        if($user['email'] == $_POST['email'] && password_verify($_POST['password'], $user['password'])){
            $_SESSION['auth'] = true;
            header("Location: /admin.php");
            die;
        }

    }
    $info = "Incorrect login or password! ";
    $info .= "<a href='register.php'>Страница регистрации</a>";


    /*$sGetUser = file_get_contents('users.csv');
    $aJsonUser = explode("\n", $sGetUser);

    foreach ($aJsonUser as $item) {
        $aUser = json_decode($item, true);
        if (!$aUser) break;                              // TODO !TO FILE SAVE USER DATA!

        foreach ($aUser as $email => $password) {
            if ($email == $_POST['email'] && password_verify($_POST['password'], $password)) {
                $_SESSION['auth'] = true;
                header("Location: /admin.php");
                die;
            }
        }
    }
    $info = "Incorrect login or password! ";
    $info .= "<a href='register.php'>Страница регистрации</a>";*/
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

<p>SIGN IN</p>
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

<?php
if(!empty($info)){
    echo $info;
}
?>


</body>
</html>