<script>
    function invalidPassword(){
        alert("Invalid Password!");
    }

    function invalidUser(){
        alert("Invalid User!");
    }

    function success(){
        window.location.href = "http://lecture/pages/welcome.php"
    }
</script>

<?php
    session_start();
    require "../php/connect.php";

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $qry = "SELECT username,password FROM users WHERE username = '$username'";
        $results = mysqli_query($connection, $qry);
        $row = mysqli_fetch_array($results, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($results);
        $passwordVerify = $row['password'];
        
        if($count == 1){
                if(password_verify($password, $passwordVerify)){
                $_SESSION['user'] = $username;
                echo "<script>success()</script>";
                }else{
                echo "<script>invalidPassword()</script>";
                }
            }else{
                echo "<script>invalidUser()</script>";
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
           <a href="../index.php"><input type="button" class="button2" value="Return"></a>
        </div>
        <div id = "container">
            <div id="content">
                <form method="post">
                    <div id="login">
                    <img src="../Images/logo.2.png"><br>
                    <input type="text" name="username" placeholder="Username"> <br><br>
                    <input type="password" name="password" placeholder="Password">
                    <br><br>
                    <button value="login" class="button2">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>