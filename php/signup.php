<?php

    require "connect.php";
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = sha1($password);
        $vPassword = $_POST['vPassword'];
        
        $sql = $connection->prepare("INSERT INTO users (firstname, lastname,email,username,password) VALUES(?,?,?,?,?)");
        $sql->bind_param("sssss", $fName, $lName, $email, $username, $password);
        
        if(!$sql->execute()){
            echo $sql->error;
        }else {
            echo "Sign Up success";
        }
    }            
   

?>

<html>
    <head>
    
    </head>
    
    <body>
         <form method="POST">
            <p>First Name:
            <input type="text" name="firstName" placeholder="First Name"><br>
            <p>Last Name:
            <input type="text" name="lastName" placeholder="Last Name"><br>
            <p>E-mail Address:
            <input type="email" name="email" placeholder="E-mail Address"><br>
            <p>Username:
            <input type="text" name="username" placeholder="Username"><br>
            <p>Password:
            <input type="password" name="password" placeholder="Password"><br>
            <p>Verify Password:
            <input type="password" name="vPassword" placeholder="Verify Password"><br>
                
            <input type="submit" value="Sign up">
        </form>
    </body>
</html>