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

<form action="user.php" method="POST">
    User: <input type="text" name="username">
    Pass: <input type="password" name="password">
    <input type="submit" value="Login">
</form>


<?php if (!empty($_SESSION['username'])): ?>
   <p style="color:red;display:inline"><?php echo $_SESSION['username']; ?></p> sveikas sugrizes
    <?php unset ($_SESSION['username']) ?>
<?php else :?>

<?php endif ?>


</body>
</html>