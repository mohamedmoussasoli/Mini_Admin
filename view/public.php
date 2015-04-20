<!DOCTYPE html>

<html>
    <head>
        <title>Public</title>
        
        <style>
            h1{
                width: 50%;
                float: left;
                padding: 0;
                margin: 0px;
            }
            
            .option {
                width: 40%;
                float: right;
            }
            
            .option a {
                float: right;
                margin-right: 10px;
            }
        </style>
    </head>
    
    <body>
    
    <h1>Welcome to our website</h1>
    
    <div class="option">
        <a href="controller/c_logout.php">Log out</a>
        <?php
            echo isset($link) ? '<a href="?page='.$link.'">'.str_replace("_"," ",ucfirst($link)).'</a>' : '';
        ?>
    </div>
    
    
    
    </body>
</html>
