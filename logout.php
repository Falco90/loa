<?php

session_start();

$_SESSION = array();

session_destroy();


?>
<!DOCTYPE html>
<head>
<meta http-equiv="refresh" content="3; index.php"/>
<link rel="stylesheet" href="loa.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <?php
    echo "You have been logged out. You will be returned to the portal in a few seconds";
    ?>
</div>
</div>
</body>
</html>