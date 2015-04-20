<?php

function escape ($string) {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    
    return $string;
}

function hashed ($password) {
    $hash = "ajsdhgiasdg657653762411&^%$&^%76";
    $password = sha1($password.$hash);
    return $password;
}

function redirect_to ($location) {
    header("Location: ".$location);
}

function pre ($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
