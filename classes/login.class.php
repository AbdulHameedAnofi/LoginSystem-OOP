<?php

include "logincontr.class.php";

if (isset($_POST['submit'])) {
    $username = $_REQUEST['username'];
    $password = md5($_REQUEST['pass']);

    $userobj = new LoginContr($username, $password);
    echo $userobj->login();
}
