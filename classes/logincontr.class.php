<?php

include "../includes/class-loader.inc.php";

class LoginContr extends User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    public function login() {
        if (empty($this->username) || empty($this->password)) {
            echo "Please input your login details";
            // header("location: /login.php?error=emptyField");
            exit();
        }
        elseif ($this->checkUser($this->username, $this->password) > 0) {
            echo "Welcome $this->username ";
        }
        else {
            echo "Incorrect username or password";
            // header("location: /login.php?error=IcorrectDetails");
            exit();
        }
    }
}