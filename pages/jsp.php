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

    <div class="occupy">
        <div class="side_nav">
            <div class="link"><a href="#">Link 1</a></div>
            <div class="link"><a href="#">Link 1</a></div>
            <div class="link"><a href="#">Link 1</a></div>
            <div class="link"><a href="#">Link 1</a></div>
        </div>
    </div>
    <div class="content-container">
        <div class="content-title">
            <h2> Java Server Pages and Java Servelets</h2>
        </div>
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2> Java Server Pages (JSP)</h2>
            </div>

            <div class="content-sub-text">
                <p>JavaServer Pages (JSP) technology enables Web developers and designers to rapidly develop and easily maintain, information-rich, dynamic Web pages that leverage existing business systems. As part of the Java technology family, JSP technology enables rapid development of Web-based applications that are platform independent. JSP technology separates the user interface from content generation, enabling designers to change the overall page layout without altering the underlying dynamic content.
                </p>
            </div>
        </div>
        <div class="content-sub-container">
            <div class="content-sub-title">
                <h2>Java Servlets </h2>
            </div>
            <div class="content-sub-text">
                Java Servlet technology provides Web developers with a simple, consistent mechanism for extending the functionality of a Web server and for accessing existing business systems. A servlet can almost be thought of as an applet that runs on the server side--without a face.
            </div>
            <div class="content-sub-text">
                <b>javax.servlet</b> <br>
                <div class="content-mini-text">
                    <p>The javax.servlet package contains a number of classes and interfaces that describe and define the contracts between a servlet class and the runtime environment provided for an instance of such a class by a conforming servlet container. Source: Tomcat Apache
                    </p>
                </div>
                <b>javax.servlet Interfaces:</b> <br> Servlet Request <br> ServletResponse <br> RequestDispatcher <br> ServletConfig <br> ServletContext <br> SingleThreadModel <br> Filter <br> FilterConfig <br> FilterChain <br> ServletRequestListener <br> ServletRequestAttributeListener <br> ServletContextListener <br> ServletContextAttributeListener <br> <br>

                <b>javax.servlet Classes</b> <br> GenericServlet <br> ServletInputStream <br> ServletOutputStream <br> ServletRequestWrapper <br> ServletResponseWrapper <br> ServletRequestEvent <br> ServletContextEvent <br> ServletRequestAttributeEvent <br> ServletContextAttributeEvent <br> ServletException <br> UnavailableException <br> <br>

                <b>javax.servlet.http</b> <br>
                <div class="content-mini-text">
                    <p>The javax.servlet.http package contains a number of classes and interfaces that describe and define the contracts between a servlet class running under the HTTP protocol and the runtime environment provided for an instance of such a class by a conforming servlet container. Source: tomcat apache
                    </p>
                </div>
                <b> javax.servlet.http Interfaces </b> <br> HttpServletRequest <br> HttpServletResponse <br> HttpSession <br> HttpSessionListener <br> HttpSessionAttributeListener <br> HttpSessionBindingListener <br> HttpSessionActivationListener <br> <br>

                <b>javax.servlet.http Classes</b> <br> HttpServlet <br> Cookie <br> HttpServletRequestWrapper <br> HttpServletResponseWrapper <br> HttpSessionEvent <br> HttpSessionBindingEvent <br>
            </div>
        </div>
    </div>

</body>

</html>