<?php

include "includes/class-loader.inc.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="classes/userview.class.php" method="POST" style="background-color: ghostwhite;">
        <h3>Sign Up</h3>
        <label for="first_name">First Name</label><br>
        <input type="text" name="first_name"><br>
        <br>
        <label for="last_name">Last Name</label><br>
        <input type="text" name="last_name"><br>
        <br>
        <label for="email">Email</label><br>
        <input type="text" name="email"><br>
        <br>
        <label for="user_name">Userame</label><br>
        <input type="text" name="user_name"><br>
        <br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass"><br>
        <br>
        <label for="conpass">Confirm Password</label><br>
        <input type="password" name="conpass"><br>
        <br>
        <label for="dob">Date of Birth</label><br>
        <input type="text" name="dob"><br>
        <br>
        <p>Already have an account? <a href="http://localhost/Practice/loginsystemoop/login.php" style="color:indianred">Login</a></p>
        <input type="submit" value="Sign up" name="submit">
    </form>
    <?php
    
    ?>
    
</body>
</html>