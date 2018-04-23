<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-23
 * Time: 14:14
 */
session_start();

function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "first";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}

if(isset($_POST['submit'])):
    $data= [];
    $data['username']=$_POST['username'];
    $data['password']=$_POST['password'];
    $data['email']=$_POST['email'];
    $data['name']=$_POST['name'];

    storeUser($data);
endif;
function storeUser($data){
    $sql = 'INSERT INTO users (username,password,email,name) VALUES (:username,:password,:email,:name)';
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'username' => $data['username'],
        'password' => $data['password'],
        'email' => $data['email'],
        'name' => $data['name']
    ]);
    $_SESSION['registered']=1;
}



header("Location: login.php");
