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
    Post:
    <br>
    <input type="text" name="title" placeholder="Title" required>
    <br>
    <textarea name="content" id="" cols="50" rows="10" placeholder="Content"></textarea>
    <br>
    <input type="submit" value="Submit" name="submit_post">
</form>



</body>
</html>

<?php
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
    $data['name']=$_POST['name'];
    $data['surname']=$_POST['surname'];
    $data['email']=$_POST['email'];

    storeAuthor($data);
endif;
function storeAuthor($data){
    $sql = 'INSERT INTO author (name,surname,email) VALUES (:name,:surname,:email)';
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'name' => $data['name'],
        'surname' => $data['surname'],
        'email' => $data['email'],
    ]);
    return $sth->rowCount();
}


function storePost($data){

    $sql = "INSERT INTO post (title,content, parent_id) VALUES (:title,:content, :parent_id)";
    $sth = getDb()->prepare($sql);

    $sth->execute([
        "title" => $data['title'],
        "content" => $data['content'],
        "parent_id" => $data['parent_id']
    ]);

    return $sth->rowCount();
}