
<?php
    if(!empty($_SESSION['auth'])) { ?>
        <a href="logout.php">Logout</a>
    <?php }

    else { ?>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="index.php">Home</a>
    <?php } ?>
