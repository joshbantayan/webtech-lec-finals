<?php

$dbServer = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "userlogin";

$connection = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);

if($connection->connect_error){
    die("Connection to database error: " . $connection->connect_error)
}
    echo "Connection Success";
?>