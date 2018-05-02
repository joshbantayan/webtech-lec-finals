<!DOCTYPE HTML>

<html>
    
    <head>
        <Title>Webtech Finals</Title>
        <link rel="icon" type="image/png" href="Images/Icon2.png" style="width: 200px">
        <link rel="stylesheet" href="Css/main.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        
    <form action="signup.php" method="post">
        <p>First Name:</p>
        <input type="text" name="firstName" placeholder="First Name"><br>
        <p>Last Name:</p>
        <input type="text" name="lastName" placeholder="Last Name"><br>
        <p>E-mail Address:</p>
        <input type="email" name="email" placeholder="E-mail Address"><br>
        <p>Username: </p>
        <input type="text" name="username" placeholder="Username"><br>
        <p>Password: </p>
        <input type="password" name="password" placeholder="Password"><br>
        <p>Verify Password: </p>
        <input type="password" name="vPassword" placeholder="Verify Password"><br>
        <input type="submit" value="Sign Up">
    </form>
    </body>
</html>

  <?php
        require "../php/connect.php";
        $fName = "";
        $LName = "";
        $email = "";
        $username = "";
        $password = "";
        $vPassword = "";

        if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['vPassword'])){
            $fName = $_POST['firstName'];
            $lName = $_POST['lastName'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = sha1($password);
            $vPassword = $_POST['vPassword'];
            
            $statment = $connection->prepare("INSERT INTO user(firstname, lastname,email,username,password) VALUES(?,?,?,?,?)");
            $statment->bind_param("sssss", $fName,$lName,$email,$username,$password);

            if(!$statment->execute()){
                     echo $statment->error;   
                    }
        }
    ?>