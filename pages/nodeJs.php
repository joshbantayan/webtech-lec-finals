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
                </div>
            </div>
            </nav>
        </div>
        
    <div class="occupy">
        <div class="side_nav">
            <div class="link"><a href="ss-scripting.php">Server-Side Scripting Technologies</a></div>
            <div class="link"><a href="jsp.php">JSP and Java Servlets</a></div>
            <div class="link"><a href="web-security.php">Web Security</a></div>
            <div class="link"><a href="nodeJs.php">Node.js</a></div>
            <div class="link"><a href="php.php">PHP</a></div>
        </div>
    </div>
    <div class="content-container">
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> Node.js </h2>
            </div>

            <div class="content-sub-text">
                <p>Node.js is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient. Node.js' package ecosystem, npm, is the largest ecosystem of open source libraries in the world. <br> -Nodejs.org</p>
            </div>
        </div>

        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> Node.js History </h2>
            </div>

            <div class="content-sub-text">
                <p>Node.js was originally written by Ryan Dahl in 2009. The initial release supported only Linux and Mac OSX, but its development and maintenance was later led by Ryan Dahl himself and sponsored by Joyent.Node.js is a runtime system used for creating mostly server-side applications. Eventually becoming popular, Node.js is now used by programmers to create APIs and build new matrices of interoperability across the Internet.</p>
            </div>
        </div>
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> Express.js </h2>
            </div>

            <div class="content-sub-text">
                <p>Express.js or simply Express, is a flexible, fast, and minimalistic Node.js framework that is written in JavaScript and provides a powerful set of features for developing web and mobile applications. Express allows set up middlewares to respond to HTTP Requests, routing table for performing different actions based on the HTTP Methods and URLs, renders HTML pages dynamically based on passing arguments to templates. It supports the Model-View-Controller architecture, that allows you to build websites in a model-driven format.</p>
            </div>
        </div>
    </div>
    <div class="footer"><br/> Web Systems and Technologies 2018 - 9331A Group 4 </div>
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
