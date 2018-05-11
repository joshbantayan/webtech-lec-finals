<?php
    session_start();
    require "../php/connect.php";
?>


 <?php
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['loginB'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*$pass = sha1($password);*/
    $stmt = mysqli_fetch_assoc(mysqli_query($connection, "SELECT username, password FROM users WHERE username = '$username'"));
    $uname = $stmt['username'];
    $pass = $stmt['password'];/*
    $pa = sha1($stmt['password']);*/
                          
    if($username == $uname && $password == $pass){
    $res = mysqli_query($connection, "SELECT username, and password FROM users WHERE username = '$username' and '$password'");
        while($row = mysqli_fetch_row($res)){
            $uname = $row[0];
            header("Location: ../index.php");
        }
                            
        echo "error";
    }else {
        echo "incorrect username or password";
        }

    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <Title>Webtech Finals</Title>
        <link rel="stylesheet" href="../css/main.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        
        <div class="navigation-bar">
           <a href="../index.php"><input type="button" class="button" value="Return"></a>
        </div>
        <div id = "container">
            <div id="login-content">
                <form role ="form" method="post">
                    <div id="login">
                    <img src="../Images/logo.2.png"><br>
                    <input type="text" name="username" placeholder="Username"> <br><br>
                    <input type="password" name="password" placeholder="Password">
                    <br><br>
                    <button value="login" class="button-login">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>