<?php

require_once "config.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$UserID = $_SESSION["id"];

$message = $_POST['message'];

$sql = "INSERT INTO messages (message, UserID) VALUES ('$message', '$UserID')";

if ($link->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Message saved successfully<br>
    You will be directed back to the main page in a few seconds";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<!DOCTYPE html>
<meta http-equiv="refresh" content="5; welcome.php"/>

</html>