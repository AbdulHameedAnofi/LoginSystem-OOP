<?php

spl_autoload_register('logClassLoader');

function logClassLoader($class) {
    $path = "../classes/";
    $extension = ".class.php";
    
    include $path . $class . $extension;
}