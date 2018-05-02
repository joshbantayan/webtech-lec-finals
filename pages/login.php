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
        
        <div class="navbar">
            <a href="index.html"><img src="../Images/logo.2.png" id="home"></a>
        </div>
        
        <div id="login">
            <form action="login.html" method="post">
                <input type="text" name="uName" placeholder="Username"><br><br>
                <input type="password" name="password" placeholder="Password">
                <br><br>
                <input type="submit" value="login" id="loginB">
            </form>
        </div>
    </body>
</html>

    <?php
        require "../php/connect.php";
    ?>