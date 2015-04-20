<!doctype html>

<html lang="en">
    
    <head>
        <title>Register</title>
        <style>
            .message {
                color: red;
                font-style : italic;
            }
            
            .s-message {
                color: green;
                font-family: cursive;
            }
        </style>
    </head>
    
    <body>
        
        <?php
            
            if(isset($_SESSION['message'])) {
                echo "<h1 class='s-message'>".$_SESSION['message']."</h1>";
                unset($_SESSION['message']);
            }
        ?>
        
        <form action="" method="post">
            
            <fieldset>
                
                <legend>Register New User</legend>
                
                <p>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                    <span class="message"><?php echo (isset($register_errors['username'])) ?  $register_errors['username'] : ''?></span>
                </p>
                
                <p>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                    <span class="message"><?php echo (isset($register_errors['password'])) ?  $register_errors['password'] : ''?></span>
                </p>
                
                <p>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email">
                    <span class="message"><?php echo (isset($register_errors['email'])) ?  $register_errors['email'] : ''?></span>
                </p>
                
                <p>
                    <input type="submit" name="register" value="Register">
                </p>
                
            </fieldset>
            
        </form>
        
        <br>
            
        <a href="?action=login">Log in Now</a>
        
    </body>
    
</html>
