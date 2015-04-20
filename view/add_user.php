<!DOCTYPE html>

<html>
    <head>
        <title>Add user</title>
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
                
                <legend>ADD New User</legend>
                
                <p>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                </p>
                
                <p>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </p>
                
                <p>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email">
                </p>
                
                <p>
                    <label for="permission">Permission : </label>
                    <select name="permission" id="permission">
                        <option value="admin">Admin</option>
                        <option value="moderator">Moderator</option>
                        <option value="user">User</option>
                    </select>
                </p>
                
                <p>
                    <input type="submit" name="add" value="Add New User">
                </p>
                
            </fieldset>
            
        </form>
    
        <h3><a href="?page=manage_users">&laquo; Back to manage users</a></h3>
    
    </body>
</html>
