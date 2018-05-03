<?php

    include "connect.php";

    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$password = sha1($password);
    //$vPassword = $_POST['vPassword'];
            
    $sql = "INSERT INTO user (firstname, lastname,email,username,password) VALUES('$fName','$lName','$email','$username','$password');";
        
    mysqli_query($connection, $sql);