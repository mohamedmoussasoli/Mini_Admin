<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
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
                
                <legend>Log In</legend>
                
                <p>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                    <span class="message"><?php echo (isset($errors['username'])) ?  $errors['username'] : ''?></span>
                </p>
                
                <p>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                    <span class="message"><?php echo (isset($errors['password'])) ?  $errors['password'] : ''?></span>
                </p>
                
                <p>
                    <input type="submit" name="login" value="Login">
                </p>
                
            </fieldset>
                
        </form>
        
        <br>
            
        <a href="?action=register">Don't have an account! register Now</a>
    
    
    </body>
</html>
