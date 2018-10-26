<?php


require_once "config.php";


session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$UserID = $_SESSION["id"];

$sqlselect = "SELECT message FROM messages WHERE UserID=$UserID ORDER BY id DESC";
$result = $link->query($sqlselect);
/*
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
        echo '<div class="msg">';
        echo "Message: " . $row["message"]."<br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}
*/
?>

<head>
<link rel="stylesheet" href="loa.css">
</head>
<body>
        <div class="wrapper">
        <h2>Your messages</h2>
        <a href="welcome.php">Go back to the main page</a>
        <?php
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
        echo '<div class="msg">';
        echo "". $row["message"]."<br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}?>
<div id="scrollpanel">
    <p>test<br><br><br><br><br><br>
</div>
</div>
</body>