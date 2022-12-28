<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my web site</title>
</head>
<body>
<a href="logout.php">lougout</a>
<h1>this is the index page</h1>
    <br>
    hello, <?php echo $user_data['user_name']; ?>
</body>
</html>