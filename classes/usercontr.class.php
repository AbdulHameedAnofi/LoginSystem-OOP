<?php

// include "./index.php";
include "../includes/class-loader.inc.php";


class UserContr extends User {
    private $fname;
    private $lname;
    private $email;
    private $username;
    private $password;
    private $conpass;
    // private $hashPass;
    private $dob;

    public function __construct($fname, $lname, $email, $username, $password, $conpass, $dob) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->conpass = $conpass;
        $this->dob = $dob;
    }

    public function authenticate() {
        if (empty($this->fname) or empty($this->lname) or empty($this->email) or empty($this->username) or empty($this->password) or empty($this->dob)) {
            // echo "Please you have to fill all fields!";
            header("location: ../index.php?signup=empty");
            exit();
        }
        elseif (strlen($this->password) < 8) {
            // echo "password must be at least 8 characters long"; 
            header("location: ../index.php?signup=weakPassword");
            exit();
        }
        elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            // echo "Invalid email address";
            header("location: ../index.php?signup=invalidEmail");
            exit();
        }
        elseif ($this->createdUser($this->email) > 0) {
            // echo "Username already exists";
            header("location: ../index.php?signup=emailTaken");
            exit();
        }
        elseif ($this->password !== $this->conpass) {
            // echo "Passwords don't match";
            header("location: ../index.php?signup=passwordMissMatch");
            exit();
        }
        else {
            $this->createUser($this->fname, $this->lname, $this->email, $this->username, $this->password, $this->dob);
            echo "Account created" . "<br>";
            header("location: ../index.php?signup=success");
            exit();
            ?>
            <a href="http://localhost/Practice/loginsystemoop/login.php">Click here to login</a>
            <?php
        }
    }
}