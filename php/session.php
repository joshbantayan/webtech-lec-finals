<?php
    require "../php/connect.php";
    session_start();

    $checkUser =$_SESSION['user'];
    $sessionSql = mysqli_query($connection, "SELECT firstname FROM users where username = '$checkUser';");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);
    $session = $row['firstname'];

     if(!isset($_SESSION['user'])){
      header("location:http://lecture/pages/login.php");
   }
?>