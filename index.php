<?php require_once 'StaticDatabase.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD dengan OOP</title>
        <link href="error.css" rel="stylesheet" />
    </head>
    <body>
        <?php 
        print_r(StaticDatabase::get('users')->result());
        ?>
    </body>
</html>
