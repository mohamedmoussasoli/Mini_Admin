<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;

$user->delete_user($id);

header("location: index.php?page=manage_users");