<?php session_start(); ?>
<?php include 'store.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<form action="" method="POST">
    Author: <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="surname" placeholder="Surname" required>
    <input type="text" name="email" placeholder="Email" required>
    <input type="submit" value="Submit" name="save_author">
    <br>
</form>
<form action="" method="post">
    Post:
    <br>
    <input type="text" name="title" placeholder="Title" required>
    <br>
    <textarea name="content" id="" cols="50" rows="10" placeholder="Content"></textarea>
    <br>
    Author: <select name="parent_id">
        <?php authorSelectList(); ?>
    </select>
    <br>
    <input type="submit" value="Submit" name="submit_post">
</form>



</body>
</html>

