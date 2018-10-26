<?php

require_once "config.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$UserID = $_SESSION["id"];

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="loa.css">
</head>
<body>
    <div class="wrapper">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site. </h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset your password</a>
        <a href="logout.php" class="btn btn-danger">Sign out of your account</a>
        <a href="messages.php" class="btn btn-danger">See your messages</a>
    </p>

    <form action="messagesent.php" method="POST">
        Message:<br>
        <textarea name="message" class="message"></textarea><br>
        <input type="submit" value="send">
    </form>
</div>
</body>
</html>