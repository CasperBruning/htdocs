<?php
require_once("../config/database.php");
require_once('../src/userFunctions.php');
require_once("../src/databaseFunctions.php");
require_once("../src/server.php");
$user = null;
session_start();

if (isset($_SESSION['userID'])) {
    $user = $_SESSION['userID'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hompage.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/beheer.css">
    <link rel="stylesheet" type="text/css" href="css/AdminOmgeving.css">
    <script src="js/jQuery/jquery-3.6.0.min.js"></script>
    <script src="js/index.js"></script>
    <title>PC-Samensteller</title>
</head>
<body>
<section class="top-nav">
    <div>
        <a href="homepage.php" class="logoHeader"><img align="center" src="img/logo.png"></a>
        <a class="naamHeader">PC-Samensteller.nl</a>
    </div>
    <input id="menu-toggle" type="checkbox"/>
    <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
    </label>
    <ul class="menu">
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <?php
        if ($user == 1) {
            ?>
            <li><a href="beheer.php">AdminPage</a></li>
        <?php } ?>
        <?php
        if ($user != null) {
            ?>
            <li><a href="logout.php">uitloggen</a></li>
            <li class="logInIconLI"><a href="#"><img class="logInIcon" src="img/LoggedInIcon.png"><span
                            class="LogInText">Account</span></a></li>
            <?php
        } else {
            ?>
            <li><a href="login.php">Log In</a></li>
            <li><a href="register.php">Sign Up</a></li>
        <?php }
        ?>

    </ul>
</section>