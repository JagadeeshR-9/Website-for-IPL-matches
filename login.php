<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <a href="logout.php">Click here to go back</a><br><br>
        <form action="checklogin.php" method="POST">
            Enter Username: <br><input type="text" name="username" required="required" /> <br>
            Enter password: <br><input type="password" name="password" required="required" /> <br><br>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>