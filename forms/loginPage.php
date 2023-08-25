<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>Fill out the form to sign up"</p>
<form method="post" action="handleRegistrationData.php">

    <div>
        <label for="email"> Enter your email: </label>
        <input id="email" type="email" name="email" value="" /><br>
        <label for="password"> Enter your password: </label>
        <input id="password" type="text" name="password" value="" /><br>
        <label for="firstName"> Enter your name: </label>
        <input id="firstName" type="text" name="firstName" value="" /><br>
        <label for="lastName"> Enter your last name: </label>
        <input id="lastName" type="text" name="lastName" value="" /><br>
        <label for="age"> Enter your age: </label>
        <input id="age" type="number" name="age" value="" /><br>
        <input type="submit" value="Send">

    </div>
</form>

<p>Already have an account?</p>
<form method="post" action="handleLoginQuery.php">

    <div>
        <label for="loginEmail"> Enter your email: </label>
        <input id="loginEmail" type="email" name="loginEmail" value="" /><br>
        <label for="logPass"> Enter your password: </label>
        <input id="logPass" type="password" name="logPass" value="" /><br>
        <input type="submit" value="Send">

    </div>
</form>


</body>
</html>