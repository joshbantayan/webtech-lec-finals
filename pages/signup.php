
<script>
    function allFields()
    {
        alert("All fields must be filled");
        window.location.href = "http://lecture/pages/signup.php";
    }
    function passwordValidatef()
    {
        alert("Password does not match");
        window.location.href = "http://lecture/pages/signup.php";
    }
    
     function usernameTaken()
    {
        alert("Username is already taken!");
        window.location.href = "http://lecture/pages/signup.php";
    }
    
    function emailTaken()
    {
        alert("Email is already taken!");
        window.location.href = "http://lecture/pages/signup.php";
    }
    
    function successfull()
    {
        alert("Registration Success!");
        window.location.href = "http://lecture/pages/welcome.php";
    }
</script>

<?php
    session_start();
    require "../php/connect.php";
    
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $verifyPassword = $_POST['vPassword'];
        $registration = date("Y/m/d");
        $qry = "SELECT * FROM users";
        $results = mysqli_query($connection, $qry);
        $row = mysqli_fetch_array($results, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($results);
        $usernameVerify = $row['username'];
        $emailVerify = $row['email'];
        
        if($fName == null || $lName == null || $email == null || $username == null || $password == null || $verifyPassword == null){
            echo "<script>allFields()</script>";
            } elseif($email  == $emailVerify){
                echo "<script>emailTaken()</script>";
            } elseif($username == $usernameVerify){
                echo "<script>usernameTaken()</script>";
            }elseif($verifyPassword != $password){
                echo "<script>invalidPassword()</script>";
                    }else{
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = $connection->prepare("INSERT INTO users (firstname, lastname,email,username,password, registrationdate) VALUES(?,?,?,?,?,NOW())");
                    $sql->bind_param("sssss", $fName, $lName, $email, $username, $password);
        
                        if(!$sql->execute()){
                            echo $sql->error;
                        }else{
                            $_SESSION['user'] = $username;
                            echo " <script>successfull()</script>";
                        }
                }
    }
   

?>

<!DOCTYPE HTML>
<html>
    
    <head>
        <Title>Webtech Finals</Title>
        <link rel="icon" type="image/png" href="Images/Icon2.png" style="width: 200px">
        <link rel="stylesheet" href="../css/main.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
            <div id="container">
                <div id="content">    
                    <form method="post">
                        <div id="signup">
                            <input type="text" name="firstName" placeholder="First Name"><br>     
                            <input type="text" name="lastName" placeholder="Last Name"><br>    
                            <input type="email" name="email" placeholder="E-mail Address"><br>
                            <input type="text" name="username" placeholder="Username"><br>
                            <input type="password" name="password" placeholder="Password"><br>     
                            <input type="password" name="vPassword" placeholder="Verify Password"><br><br>
                            <input type="submit" class="button2" value="Sign Up">
                        </div>
                     </form>
                </div>
            </div>    
    </body>
</html>