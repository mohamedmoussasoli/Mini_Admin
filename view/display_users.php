<!DOCTYPE html>

<html>
    <head>
        <title>Display users</title>
        <style>
            th,td {
                padding: 10px;
            }
        </style>
    </head>
    
    <body>
    
    <table border = "1">
        <tr>
            <th>#id</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <h3><a href="index.php">&laquo; Back to public area</a></h3>
    
    </body>
</html>
