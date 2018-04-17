<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-17
 * Time: 14:23
 */

function checkUser($user,$my_user){
    if($user['username'] === $my_user['username'] &&  $user['password'] === $my_user['password']){
        return true;
    }
    else return false;
}

    $user = [
        'username' => "admin",
        'password' => "admin123"
    ];

    $my_user = [
    'username' => "admin",
    'password' => "admin123"
    ];

var_dump(checkUser($user,$my_user));