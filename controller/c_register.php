<?php

if(isset($_POST['register'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    
    if($user->register_new_user($username,$password,$email)) {
        $_SESSION['message'] = "Thank you for registeration";
    }else{
        $register_errors = $user->check_register_errors ();
    }
}


require 'view/register.php';

exit();