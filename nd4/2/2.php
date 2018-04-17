<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-17
 * Time: 16:54
 */

function checkUser($user,$username,$password){
    if($user['username'] === $username &&  $user['password'] === $password){
        return true;
    }
    else return false;
}

$user = [
    'username' => "admin",
    'password' => "admin123"
];

$username = "admin";
$password = "admin123";

var_dump(checkUser($user,$username,$password));
