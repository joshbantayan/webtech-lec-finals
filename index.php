<!DOCTYPE HTML>

<html>
    
    <head>
        <Title>Webtech Finals</Title>
        <link rel="icon" type="image/png" href="Images/Icon2.png" style="width: 200px">
        <link rel="stylesheet" href="Css/main.css">
        <script rel="text/javascript" src="script/signup.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="navbar">
            <form action="pages/signup.php" method="get">
                <input type="submit" value="Hi">
            </form>
            <form action="pages/login.php" method="get">
                <input type="submit" value="Hello">
            </form>
            <form  class="nav-login">
                <div class="nav-login-btn">
                    <button type="button" class="button" data-toggle="modal" data-target="#myModal1">Login</button>
                    
                    <div class="modal fade" id="myModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
      
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Login</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
        
                            <!-- Modal body -->
                            <div class="modal-body">
                                 <form action="signup.php" method="post">
                                    <p>Username</p>
                                    <input type="text" name="username" placeholder="Username"><br>
                                    <p>Password</p>
                                    <input type="password" name="password" placeholder="Password"><br>
                                </form>
                            </div>
        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-danger"value="Sign Up">
                            </div>
        
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <button type="button" class="button" data-toggle="modal" data-target="#myModal">Sign Up</button>
                    
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
      
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Sign Up!</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
        
                            <!-- Modal body -->
                            <div class="modal-body">
                                 <form action="pages/signup.php" method="post">
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
                            </div>
        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
        
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
        
        <div id="welcome">
            <img src="Images/logo.2.png" id="logo">
            <p>Web Systems and Technologies</p>
        </div>
        
    </body>
    
</html>

