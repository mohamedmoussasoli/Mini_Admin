<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;

$user_data = $user->fetch_user_by_id($id);

if(isset($_POST['edit'])) {
    
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    $permission = $_POST['permission'];
    
    $update_user = $user->update_user($username,$password,$email,$permission,$id);
    
    if($update_user) {
         $_SESSION['message'] = "User data has been updated";
    }else{
        $_SESSION['message'] = "please check the inserted data";
    }
    
}

require 'view/edit_user.php';