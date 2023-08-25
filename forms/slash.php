<?php

$firstNum = $_POST['firstNumber'];
$secondNum = $_POST['secondNumber'];

$theSum = $firstNum + $secondNum;

$file_open = fopen("file.csv", "a");
fwrite($file_open, (int)$firstNum . " + " . (int)$secondNum . " = " . $theSum . "\n");
fclose($file_open);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>

    <form method="post" action="slash.php">
        <label for="firstNumber"> Enter first number: </label>
        <input id="firstNumber" type="number" name="firstNumber" value="
            <?php
                if(!empty($_POST['firstNum']))
                    echo $firstNum?>" <br>
        <label for="secondNumber"> Enter second number: </label>
        <input id="secondNumber" type="number" name="secondNumber" value=""><br>
        <label for="theSum"> Processing...<br>Sum of these numbers: </label>
        <input id="theSum" type="number" name="theSum" value="<?php echo $theSum?>" disabled><br>
        <input type="submit">

    </form>


</body>
</html>

