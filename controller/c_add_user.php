<?php

if(isset($_POST['add'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    $permission = $_POST['permission'];
    
    $check_add = $user->register_new_user($username,$password,$email,$permission);
    
    if($check_add) {
        $_SESSION['message'] = "New user has been added";
    }else{
        $_SESSION['message'] = "please check the inserted data";
    }
}

require 'view/add_user.php';