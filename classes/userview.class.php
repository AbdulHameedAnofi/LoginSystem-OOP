<?php

include "usercontr.class.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['user_name'];
    $password = md5($_POST['pass']);
    $conpass = md5($_POST['conpass']);
    $dob = $_POST['dob'];


    $obj = new UserContr($fname, $lname, $email, $username, $password, $conpass, $dob);
    echo $obj->authenticate();

    // $userV = new UserView;
    // echo $userV->getError() . "<br>";
    // echo $userV->showData() . "<br>";
}