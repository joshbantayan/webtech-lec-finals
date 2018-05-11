
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
                                 <form action="php/signup.php" method="POST">
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
                                </form>
                            </div>
        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" value="Sign Up">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
        
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>




------------------------------------------
#welcome p {
    font-size: 10vh;
    font-family: "Montserrat";
    color: #F76280;
    text-align: center;
    line-height: 150vh;
    
}

#login {
    border: 1vh solid white;
    border-radius: 5vh;
    background-color: rgba(108, 91, 123, 0.6);
    opacity: 1;
    width: 30%;
    height: 50%;
    left: 35%;
    top: 15%;
    position: absolute;
    text-align: center;
    padding-top: 15%;
}

#login input{
    width: 20vh;
    font-size: 3vh;
}

#home {
    width: 5vh;
    cursor: pointer;
}

#logo{
    display: block;
    position: absolute;
    left: 25%;
    top: 15%;
}

#signup {
    align-content: center;
}

{
    display: inline-block;
    float: right;
    padding-right: 15vh;
    padding-top: 10vh;
    background-color: #F8B195;
    padding-bottom: 7vh;
    height: 60vh;
    padding: 0.4vh;
    height: 6.8vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;   
}

{
    float: right;
    display: inline-block;
    padding-right: 3vh;
}

{
    float: left;
    padding:  2.1vh 1vh;
    
}

{
    height: 2.5vh;
    width: 18vh;
}

{
    float: right;
    display: inline-block;
}

{
    margin: 1vh;
    height: 5vh;
    width: 12vh;
    font-size: 2.5vh;
}

{
    display: block;
    position: absolute;
    left: 55vh;
    top: 15vh;
}

{
    border-radius: 3vh;
    border: 0.5vh solid #FFFFFF;
    background: none;
    color: #FFFFFF;
    font-size: 2vh;
    font-size: 25px;
    cursor: pointer;
    transition-duration: 0.3s;
}

{
    border-radius: 3vh;
    border: 0.5vh solid #C03C84;
    background: none;
    color: #C03C84;
    transform: scale(1.5);
}