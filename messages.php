<?php

require_once "config.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$UserID = $_SESSION["id"];

$sqlselect = "SELECT message, date, id FROM messages WHERE UserID=$UserID ORDER BY id DESC";
$result = $mysqli->query($sqlselect);

function deleteMessage() {
    $mid = $row["id"];
    $sqldelete = "DELETE FROM messages WHERE id=$mid";
    $sqldel = $mysqli->query($sqldelete);
}

?>

<head>
<link rel="stylesheet" href="loa.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>
<body>
<?php
include "navbar2.php";
?>
        <div class="wrapper">
            <div class="container">
        <h2>Your manifestations</h2>
        <?php
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
        echo '<div class="msg">';
        echo '<div class="edit-delete">';
        echo "<p class='datetime'>". $row["date"]."<br></p>";
        echo "<p class='delete'>delete</p>";
        echo "</div>";
        echo "<p>". $row["message"]."<br></p>";
        echo "<p>". $row["id"]."</p>";
        echo '</div>';
    }

} else {
    echo "0 results";
}
$mysqli->close();
?>

</div>
</div>
</body>