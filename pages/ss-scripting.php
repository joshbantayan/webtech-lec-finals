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
                <form action="../php/search.php" class="form-inline my-2 my-lg-0" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="button" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="content-container">
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> Server-Side Scripting Technologies </h2>
            </div>

            <div class="content-sub-text">
                <p>Today’s modern world is equipped with many scripting technologies and languages that can be used for processing on the server-side. In short, server-side scripting is a back-end web development technology. Compared to the client-side environment which usually makes use of web browsers to run its scripts, the server-side environment executes its scripts on a web server before it can be downloaded by a client. This is where user requests are fetched and processed via scripts running on the web server to create dynamic HTML pages which are then sent out to the browser for the client-side environment. Server-side scripting technologies are also a way to provide interaction with databases on the server, which may help to create a more interactive website.
                </p>
            </div>
        </div>
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> Some of the Server-Side Scripting Basics: </h2>
            </div>
            <div class="content-sub-text">
                <ul>
                    <li>It facilitates the transfer of data from server to browser, where the data processing takes place where it then enables user requests or have forms submitted. </li>
                    <li>Server-side scripting runs on a server, which is already embedded in a website’s code.</li>
                    <li>Server-side scripts process and return data from server to browser and browser to server.</li>
                    <li>Server-side scripts play a big role in, and are designed to interact with databases, where in order to access, information from the server must first be processed.</li>
                    <li>It enables functions such as user validation, retrieving data, saving data, and navigating from web page to web page.</li>
                    <li>It may also be used to build APIs to control the data and software that is shared with applications other than the site itself.</li>
                </ul>
            </div>
        </div>
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> What is Server-Side Scripting Programming? </h2>
            </div>
            <div class="content-sub-text">
                <p> Some server-side scripting Languages include Java, JavaScript, PHP, Python, Ruby, and several more, which are generally considered languages that run directly on the server. Server-side programming falls under the objective of having to deal with dynamic web content, in such a way where it would enable interaction with databases, servers or storages, fetching and displaying requested pages, database querying, HTML encoding, processing of user input, and structuring web applications. </p>
            </div>
        </div>
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> How does Server-Side Scripting Work?</h2>
            </div>
            <div class="content-sub-text">
                <ul>
                    <li> HTTP</li>
                </ul>
                <p>Through the use of the HyperText Transfer Protocol(HTTP), communication is enabled between web browsers and web servers. When user requests are fetched, e.g. when a user clicks on a web page, or runs an online search, an HTTP request is sent to the target server from the user’s browser.</p>
            </div>
        </div>
    </div>
</body>

</html>