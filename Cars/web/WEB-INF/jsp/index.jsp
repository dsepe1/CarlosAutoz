<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome to Spring Web MVC project</title>
    </head>

    <body>
        <div id="login">
        <form action="LoginServlet" method="post">
            Username: <input type="text" name="username" /> <br />
            Password: <input type="password" name="password" />
        </form>
        </div>
        <a href="homepage.jsp">Test</a>
    </body>
</html>
