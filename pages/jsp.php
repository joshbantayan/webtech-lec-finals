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
                    here
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
                    <div class="link"><a href="jsp.php">JSP and Java Servlets</a></div>
                    <div class="link"><a href="ss-scripting.php">Server Side Scripting</a></div>
                    <div class="link"><a href="web-security.php">Web Security</a></div>
                    <div class="link"><a href="nodeJs.php">Node.js</a></div>
                    <div class="link"><a href="php.php">PHP</a></div>
                    <div class="link"><a href="web-security.php">Web Security</a></div>
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

                <b>javax.servlet Classes</b> <br> GenericServlet - Defines a generic, protocol-independent servlet. <br> ServletInputStream -Provides an input stream for reading binary data from a client request, including an efficient readLine method for reading data one line at a time. <br> ServletOutputStream -Provides an output stream for sending binary data to the client serve. <br> ServletRequestWrapper -Provides a convenient implementation of the ServletRequest interface that can be subclassed by developers who want to adapt the response to a servlet <br> ServletResponseWrapper -Provides a convenient implementation of the ServletResponse interface that can be subclassed by developers who wish to adapt the response from a servlet
ServletRequestEvent - indicates lifecycle events for a ServletRequest. <br> ServletContextEvent -event class for notifications about changes to the servlet context of a web application
 <br> ServletRequestAttributeEvent -event class for notifications of changes to the attributes of the servlet request in an application <br> ServletContextAttributeEvent  -event class for notifications about changes to the attributes of the servlet context of a web application
.<br> ServletException -Defines a general exception a servlet can throw when it encounters difficulty. <br> UnavailableException - Defines an exception that a servlet or filter throws to indicate that it is permanently or temporarily unavailable. <br> <br>

                <b>javax.servlet.http</b> <br>
                <div class="content-mini-text">
                    <p>The javax.servlet.http package contains a number of classes and interfaces that describe and define the contracts between a servlet class running under the HTTP protocol and the runtime environment provided for an instance of such a class by a conforming servlet container. Source: tomcat apache
                    </p>
                </div>
                <b> javax.servlet.http Interfaces </b> <br> HttpServletRequest -Extends the ServletRequest interface to provide request information for HTTP servlets. <br> HttpServletResponse -Extends the ServletRequest interface to provide HTTP-specific functionality in sending a response. <br> HttpSession -  Enables a way to identify a user across more than one page request or visit to a web site then store information about that user. <br> HttpSessionListener -Under this interface changes are notified to the list of active sessions in a web application. <br> HttpSessionAttributeListener -can be implemented in order to get notifications of changes to the attribute lists of sessions within this web application. <br> HttpSessionBindingListener -Causes an object to be notified when it is bound to or unbound from a session. <br> HttpSessionActivationListener -Objects that are bound to a session may listen to container events notifying them that sessions will be passivated and that session will be activated. <br> <br>

                <b>javax.servlet.http Classes</b> <br> HttpServlet -An abstract class is provided to be subclassed to create an HTTP servlet suitable for a Web site.  <br> Cookie - Creates a small amount of information, otherwise termed a cookie, sent by a servlet to a Web browser, saved by the browser, and later sent back to the server. <br> HttpServletRequestWrapper -Provides a convenient implementation of the HttpServletRequest interface that can be subclassed by developers wishing to adapt the request to a Servlet. <br> HttpServletResponseWrapper -Provides a convenient implementation of the HttpServletResponse interface that can be subclassed by developers wishing to adapt the response from a Servlet. <br> HttpSessionEvent -class representing event notifications for changes to sessions within a web application. <br> HttpSessionBindingEvent -Under this class, events are sent to either an object that implements HTTPSessionBindingListener when it is bound or unbound from a session, or to a HTTPSessionAttributeListener that has been configured in the deployment descriptor when any attribute is bound, unbound or replaced in a session. <br>
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
