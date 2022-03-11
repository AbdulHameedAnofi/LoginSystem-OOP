<?php

include "includes/class-loader.inc.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="classes/login.class.php" method="post" style="background-color: ghostwhite;">
        <h3>Login</h3>
        <label for="username">Username</label><br>
        <input type="text" name="username"><br>
        <br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass" id="pass"><br>
        <br>
        <p>Don't have an account? <a href="http://localhost/Practice/loginsystemoop" style="color:indianred">Sign up</a></p>
        <br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>