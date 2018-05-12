<!DOCTYPE HTML>
<html>
    <head>
        <Title>Webtech Finals</Title>
        <link rel="icon" type="image/png" href="Images/Icon2.png" style="width: 200px">
        <link rel="stylesheet" href="../Css/webpages.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script rel="text/javascript" src="script/signup.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>

<!--
        <div class="navigation-bar">
            <a href="home.php"><img href="../Images/Icon2.png"></a>
            <form action="search.php">
                <input type="text" placeholder="Search..">
                <button value="search" class="button2">SEARCH</button>
            </form>
        </div>
-->
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navigation-bar">
                <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
                <img id="icon" src="../Images/logo.2.png"></button>
                <a class="navbar-brand" href="home.php">HOME</a>
                <a class="navbar-brand" href="about.php">ABOUT</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- <form action="../php/search.php" class="form-inline my-2 my-lg-0" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="button" type="submit">Search</button>
                    </form> -->
                    <div>
                        <input type="text" name="search" id="search" placeholder="Search">
                        <div id="result"></div>
                    <div>
                </div>
            </nav>
        </div>
        <div class="about-container">
                <div class="about-title-container">
                    <h2>ABOUT US</h2>
                    <div id="about-border"></div>
                    <p> About the website and the team</p>
                </div>
                <div class="about-content">
                    
                        <div class="member-container">
                            <div class="member-img">
                                <img src="../Images/joshua.png" alt="" class="mem-photo" />
                            </div>
                            <div class="member-desc">
                                <h2> Joshua John Bantayan</h2>
                            </div>
                        </div>
                    
                    <div class="member-container">
                            <div class="member-img">
                                <img src="" alt="" class="mem-photo" />
                            </div>
                            <div class="member-desc">
                                <h2> Eden Carlo Brabante</h2>
                            </div>
                        </div>
                    
                    <div class="member-container">
                            <div class="member-img">
                                <img src="../Images/noriel.png" alt="" class="mem-photo" />
                            </div>
                            <div class="member-desc">
                                <h2> Noriel Jon Navarro </h2>
                            </div>
                        </div>
                    
                    <div class="member-container">
                            <div class="member-img">
                                <img src="../Images/nikki.jpg" alt="" class="mem-photo" />
                            </div>
                            <div class="member-desc">
                                <h2> Jisselle Nicole Marinas </h2>
                            </div>
                        </div>
                    
                    <div class="member-container">
                            <div class="member-img">
                                <img src="../Images/keilly.jpg" alt="" class="mem-photo" />
                            </div>
                            <div class="member-desc">
                                <h2> Keilly Ruth Panis</h2>
                            </div>
                        </div>
                    
                    <div class="member-container">
                            <div class="member-img">
                                <img src="../Images/chasey.jpg" alt="" class="mem-photo" />
                            </div>
                            <div class="member-desc">
                                <h2> Chaserylle Know-Well Sison</h2>
                            </div>
                        </div>
                </div>
        </div>
    </body>
</html>

<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
            var text = $(this).val();
            if(text != ''){
                $.ajax({
                url: "../php/search.php",
                method: "post",
                data: {search:text},
                dataType: "text",
                success: function(data){
                        $('#result').html(data);
                    }
                });
            } else {
                $('#result').html('');
            }
        })
    });
</script>