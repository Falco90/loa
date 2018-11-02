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

$username = $_SESSION["username"];

$message = $_POST['message'];

/*
$sql = "INSERT INTO messages (message, UserID) VALUES ('$message', '$UserID')";

if ($link->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Message saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

?>


<body>
    <?php
    include "navbar2.php";
    ?>
    <div class="wrapper">  
    <div class="container">
        <h2> Welcome <?php echo $username ?>!</h2>
        <p>
        With the Law of Attraction you can manifest anything you desire. And attract whatever it is that you want in your life. To get started go to "New manifestation" in the menu bar. To view your previous manifestations go to "Your manifestations".</p>
        <p>
        Before you get started it is important to take a moment to feel what it is that you really want. We often get tricked by the mind into thinking that we want something, while we actually don't! The following excersise might help you to reach your true desires. Excersise....<br><br>
        </p>

        <h3>Instructions</h3>
        <p>Here I will write some instructions</p>

</div>
</div>
</body>
</html>