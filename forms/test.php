
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form method="post" action="handleRegistrationData.php">

        <div>

            <label for="firstName"> Enter your name: </label>
            <input type="text" name="firstName" value="" /><br>
            <label for="lastName"> Enter your last name: </label>
            <input type="text" name="lastName" value="" /><br>
            <label for="age"> Enter your age: </label>
            <input type="number" name="age" value="" /><br>
            <input type="submit" value="Send">

        </div>
    </form>

    <?php
        /*include "handleRegistrationData.php";

        echo $welcomeString;*/

    ?>
</body>
</html>

