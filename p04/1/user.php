<?php
session_start();
$username = $_POST['username'];
$_SESSION['username'] = $username;

header("Location: index.php");
?>
