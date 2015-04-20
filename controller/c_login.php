<?php

if(isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $errors = $user->check_login_errors($username,$password);
    
    if(empty($errors)) {
        
        if($user->login($username,$password)) {
            $user_data = $user->fetch_user_by_username($username);
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['permission'] = $user_data['permission'];
            header("location: index.php");
        }else{
            $_SESSION['message'] = "Please enter a valid username and password";
        }
    }
}

require 'view/login.php';

exit();