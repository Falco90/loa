<?php

$host = "localhost";
$user = "root";
$password = "mysql";
$database = "loadb";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

?>