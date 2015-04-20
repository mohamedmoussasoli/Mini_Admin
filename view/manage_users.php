<!DOCTYPE html>

<html>
    <head>
        <title>Manage Users</title>
        <style>
            td,th {
                padding: 10px;
            }
        </style>
    </head>
    
    <body>
        
    <h1><a href="?page=manage_users&action=add">+ Add new user</a></h1>
    
    <table border = "1">
        <tr>
            <th>#id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Permission</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['password'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['permission'] ?></td>
            <td><a href="?page=manage_users&action=edit&id=<?php echo $user['id'] ?>">Edit</a></td>
            <td><a href="?page=manage_users&action=delete&id=<?php echo $user['id'] ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <h3><a href="index.php">&laquo; Back to public area</a></h3>
    </body>
</html>
