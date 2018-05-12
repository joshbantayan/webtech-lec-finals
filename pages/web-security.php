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
                <h2> Web Security</h2>
            </div>

            <div class="content-sub-text">
                <p>Security awareness is essential when managing your own website application. Likewise, it is just as essential to take note of the possible threats that may be used against your website. Below are the <b>OWASP Top 10 Most Critical Web Application Security Risks for 2017. </b>
                </p>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A1 - Injection</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Injection attacks are still the most common type of critical application security risk active today, ranked as the number 1 Most Critical Web Application Security Risk by OWASP. Injection attacks occur when untrusted data is sent to an interpreter as part of a command or query, tricking the interpreter to execute unintended commands or accessing data without the proper authorization.
                    </p>
                </div>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A2 - Broken Authentication</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Under this security risk are authentication and session management which includes all aspects of handling user authentication and managing sessions. This type of security flaw allows an attacker to bypass the authentication methods used by a web application, enabling user authentication credentials to be vulnerable and unprotected when stored.
                    </p>
                </div>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A3 - Sensitive Data Exposure</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Sensitive Data Exposure is the security flaw involving sensitive data that requires extra protection. If a web application and its cookies are not secured, sensitive data stored in the web site or application is vulnerable to have its data decrypted and exposed when the data is automatically retrieved from the database, therefore making it prone to an SQL injection flaw to retrieve sensitive data credentials in clear text (i.e. credit card numbers)
                    </p>
                </div>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A4 - XML External Entities</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        XML External Entities refer to a specific type of Server-Side Request Forgery where attackers are capable of accessing local or remote services and files via a particular feature available and rarely used in XML parsers. Through access to the source code of the web page, an attacker may execute requests configured to process external entities, so that it will return the contents of a system file.
                    </p>
                </div>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A5 - Broken Access Control</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        This security flaw affects a massive amount of web applications today occurring usually when the attackers changes the parameter values, directly referring to a system object intended for authenticated and authorized users only. When access controls are defective, the attacker can compromise the whole web application, having control over admin functionality and sensitive data that may be misused.
                    </p>
                </div>
            </div>
            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A6 - Security Misconfiguration</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Improper server or web application configuration may lead to flaws such as incorrect folder permissions, usage of default accounts or passwords, or set-up or configuration pages to be enabled, and etc. When there is a security misconfiguration in the web application, a user’s data may be stolen or modified slowly over time.
                    </p>
                </div>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A7 - Cross-SIte Scripting</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Cross-site scripting may also be considered as a type of injection attack, wherein malicious scripts are sent to trusted websites. When an unsuspecting user encounters this malicious script, the site will be vulnerable to access any cookies, session tokens, or other sensitive information used by the website and retained by the browser.
                    </p>
                </div>
            </div>


            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A8 - Insecure Deserialization</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        This security flaw is a vulnerability that occurs when untrusted data is used to abuse the logic of an application, inflicting a Denial of Service attack, or upon deserialization, arbitrary codes are executed.
                    </p>
                </div>
            </div>


            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3> A9 - Using Components with Known Vulnerabilities</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Using components with known vulnerabilities is a very poor choice for protecting a web application’s data. Without adequate protection or alternative security controls, vulnerable components may be identified and exploited by cyber criminals.
                    </p>
                </div>
            </div>

            <div class="content-sub-container">
                <div class="content-sub-title">
                    <h3>A10 - Insufficient Logging and Monitoring</h3>
                </div>
                <div class="content-sub-text">
                    <p>
                        Under this security flaw, attackers rely on the lack of timely response and lack of monitoring to execute attacks without being detected by the system.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
</body>

</html>