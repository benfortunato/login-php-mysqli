<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_simple_db";

/*caso de um erro ira mosrtrar  a mensabgem */
if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname)){
    die("failed to connect to the database");
}