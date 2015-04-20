<!DOCTYPE html>

<html>
    <head>
        <title>Edit user</title>
        <style>
            .s-message {
                color: green;
                font-family: cursive;
            }
        </style>
    </head>
    
    <body>
    
    <?php
            
            if(isset($_SESSION['message'])) {
                echo "<h2 class='s-message'>".$_SESSION['message']."</h2>";
                unset($_SESSION['message']);
            }
        ?>
        
        <form action="" method="post">
            
            <fieldset>
                
                <legend>Edit User</legend>
                
                <p>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username" value="<?php echo isset($user_data['username']) ? $user_data['username'] : null?>">
                </p>
                
                <p>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </p>
                
                <p>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email" value="<?php echo isset($user_data['email']) ? $user_data['email'] : null?>">
                </p>
                
                <p>
                    <label for="permission">Permission : </label>
                    <select name="permission" id="permission" autofoucs="<?php echo isset($user_data['permission']) ? $user_data['permission'] : null?>">
                        <option value="admin">Admin</option>
                        <option value="moderator">Moderator</option>
                        <option value="user">User</option>
                    </select>
                </p>
                
                <p>
                    <input type="submit" name="edit" value="Edit User">
                </p>
                
            </fieldset>
            
        </form>
    
        <h3><a href="?page=manage_users">&laquo; Back to manage users</a></h3>
    
    </body>
</html>
