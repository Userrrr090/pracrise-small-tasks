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

<div>
    <form method="post">
<!--        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                   value="">
        </div>-->
        <label for="ukr">Ukrainian</label>
        <input type="radio" name="lang" id="ukr" value="ukr"
            <?php

                echo isset($_POST['lang']) && $_POST['lang']=='ukr' ? 'checked': ""

            ?>><br>
        <label for="eng">English</label>
        <input type="radio" name="lang" id="eng" value="eng"

        <?php

            echo isset($_POST['lang']) && $_POST['lang']=='eng' ? 'checked': ""

        ?>><br>

        <button type="submit" class="btn btn-primary">Submit</button><br>
    </form>
</div>

<?php

if(!empty($_POST['lang'])) {
    echo "Chosen language: " . $_POST['lang'];
}

?>

</body>
</html>