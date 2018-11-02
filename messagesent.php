<?php

require_once "config.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$UserID = $_SESSION["id"];

$message = $_POST['message'];

$sqlinsert = "INSERT INTO messages (message, UserID) VALUES ('$message', '$UserID')";

/*
if ($mysqli->query($sqlinsert) === TRUE) {
    echo "Message saved successfully<br>
    You will be directed back to the main page in a few seconds";
} else {
    echo "Error: " . $sqlinsert . "<br>" . $mysqli->error;
}
*/

?>

<!DOCTYPE html>
<head>
<meta http-equiv="refresh" content="3; welcome.php"/>
<title>Welcome</title>
    <link rel="stylesheet" href="loa.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <div class="wrapper">
        <div class="container">
            <?php
        if ($mysqli->query($sqlinsert) === TRUE) {
    echo "The universe has picked up your manifestation<br><br>
    There is nothing you need to do now<br><br>
    You will be transported back to your manifestation space in a few seconds";
} else {
    echo "Error: " . $sqlinsert . "<br>" . $mysqli->error;
}
?>
</div>
</div>
</head>
</html>