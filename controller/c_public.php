<?php

if(isset($_SESSION['permission'])) {
    
    if($_SESSION['permission'] == "admin") {
        $link = "manage_users";
    }
    
    if($_SESSION['permission'] == "moderator") {
        $link = "display_users";
    }
}

require 'view/public.php';