<?php

$search = "";

if(isset($_GET['search'])) {
    $search = $_GET['search'];
}

/*$key = "AIzaSyDDO5_rXJqGB7AX7VgGaudrNayhoAqkbM4";
$cx = "e2b71d0471cb1435b";*/

$url = "https://www.googleapis.com/customsearch/v1?key=AIzaSyDDO5_rXJqGB7AX7VgGaudrNayhoAqkbM4&cx=e2b71d0471cb1435b&q={$search}";

$curlClient = curl_init();
curl_setopt($curlClient, CURLOPT_URL, $url);
curl_setopt($curlClient, CURLOPT_RETURNTRANSFER, true);
$resultJson = curl_exec($curlClient);
curl_close($curlClient);


$resultArray = json_decode($resultJson, true);

/*var_dump($resultArray);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TTTTTTT</title>
</head>
<body>

    <h2>My browser</h2>

    <form method="get" action="/index.php">
        <label for="search">Search1232:</label>
        <input type="text" id="search" name="search" value=""><br><br>
        <input type="submit" value="Submitttt">
    </form>

    <?php

        foreach ($resultArray['items'] as $item)
            echo "<p>{$item['title']}</p>";

    ?>

</body>
</html>
