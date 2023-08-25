<?php

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/af91bdab0d.js" crossorigin="anonymous"></script>
</head>
<body>

<form method="post">
    <label for="country">Choose a country:</label>
    <select name="country" id="country">
            <option value="England">England</option>
            <option value="Spain">Spain</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
    </select>
    <br>
    <input type="submit" >
</form>
<?php

    if(!empty($_POST['country'])){
        echo "You chose " . $_POST['country'];
    }

?>

</body>
</html>