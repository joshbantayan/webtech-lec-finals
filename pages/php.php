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
                <h2>PHP</h2>
            </div>

            <div class="content-sub-text">
                <p>
                PHP: Hypertext Preprocessor is a server-side scripting language that is used in creating interactive web pages and is also used as a general-purpose programming language. PHP was developed by Rasmus Lerdorf in C language in 1994 to be used for monitoring his online resume and personal information, for this reason PHP was initially “Personal Home Page”.
                </p>
            </div>
        </div>
        
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP/FI (PHP 2.0)</h2>
            </div>

            <div class="content-sub-text">
                <p>
          Lerdorf combined PHP with his Form Interpreter and released it in June 8, 1995 as PHP/FI.
                </p>
            </div>

        
         <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP/FI 2 </h2>
            </div>

            <div class="content-sub-text">
                <p>
          Zeev Zuraski and Andi Gutsman are the two programmers who rebuilt PHP’s core and releasing it as PHP/FI 2 in 1997, and the name was changed to PHP: HyperText Processor.
                </p>
            </div>
        </div>
        
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP 3 </h2>
            </div>

            <div class="content-sub-text">
                <p>
          Released in June 6, 1998, was the first widely used version of PHP. An API was designed and implemented. There was a change from a single developer to multiple developers, and the name was changed from PHP/FI to PHP: HyperText Preprocessor.
                </p>
            </div>
        </div>
        
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP 4 </h2>
            </div>

            <div class="content-sub-text">
                <p>
         Released in May 22, 2000 with its new core, Zend Engine 1.0 and was faster and more reliable than its previous version. It featured better run-time performance and a new paradigm, “Compile first, Execute later”.
                </p>
            </div>
        </div>
            <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP 5 </h2>
            </div>

            <div class="content-sub-text">
                <p>
         Released in July 13,  2004 with the updated core, Zend Engine 2.0. In this version of PHP, new features were added and some old features were removed, like multiple inheritance and namespaces. It’s XML functionality was also rewritten to equal other web technologies.
                </p>
            </div>
        </div>
            
            <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP 7 </h2>
            </div>

            <div class="content-sub-text">
                <p>
         Released in December 3, 2015. It featured better error handling, scalar type declarations, return type declarations, null coalescing operator, anonymous classes, and removed all deprecated features. It is also twice as fast as PHP 5.6.
                </p>
            </div>
        </div>
            
               <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>PHP Frameworks </h2>
            </div>

            <div class="content-sub-text">
                 <ol>
                <li> Symfony</li>
                    <li>CodeIgniter</li>
                     <li>YII 2</li>
                     <li> Phalcon</li>
                     <li> CakePHP</li>
                     <li> Zend Framework</li>
                     <li> FuelPHP</li>
                     <li>Laravel</li>
                </ol>
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