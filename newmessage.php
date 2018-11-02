<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="loa.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>

<?php

require_once "config.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$UserID = $_SESSION["id"];

$message = $_POST['message'];


?>


<body>
    <?php 
    include "navbar2.php";
    ?>
    <div class="wrapper">  
    <div class="container">
        <h2>Manifest whatever you desire...</h2>
    <form class="msg-form" action="messagesent.php" method="POST">
        <h3>Your desire for today:</h3>
        <textarea name="message" class="message"></textarea><br>
        <input class="submit-btn" type="submit" value="Manifest">
    </form>
</div>
</div>
</body>
</html>