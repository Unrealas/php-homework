<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="POST">
    User: <input type="text" name="username">
    Pass: <input type="password" name="password">
    Email: <input type="text" name="email">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>