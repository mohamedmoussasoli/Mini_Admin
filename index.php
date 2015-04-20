<?php

session_start();

require 'includes/functions.php';
require 'includes/database.php';
require 'includes/user.php';

$action = isset($_GET['action']) ? $_GET['action'] : null;

if(!isset($_SESSION['username'])) {
    
    // check the action for register or login
    
    if($action != 'register') {
        require 'controller/c_login.php';
    }else{
        require 'controller/c_register.php';
    }
    
}else {
    
    $page = isset($_GET['page']) ? $_GET['page'] : null;
    
    if($_SESSION['permission'] == 'admin') {
        if($page == 'manage_users' && $action == null) {
            require 'controller/c_manage_users.php';
        }
        elseif($page == 'manage_users' AND $action == 'add') {
            require 'controller/c_add_user.php';
        }
        elseif($page == 'manage_users' AND $action == 'edit') {
            require 'controller/c_edit_user.php';
        }elseif($page == 'manage_users' AND $action == 'delete'){
            require 'controller/c_delete_user.php';
        }else{
            require 'controller/c_public.php';
        }
    }elseif($_SESSION['permission'] == 'moderator') {
        if($page == 'display_users') {
            require 'controller/c_display_users.php';
        }else{
            require 'controller/c_public.php';
        }
    }else{
        require 'controller/c_public.php';
    }
}




