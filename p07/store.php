<?php
function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "first";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}

if(isset($_POST['save_author'])):
    $data= [];
    $data['name']=$_POST['name'];
    $data['surname']=$_POST['surname'];
    $data['email']=$_POST['email'];
    storeAuthor($data);
endif;

if(isset($_POST['submit_post'])):
    $data= [];
    $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
    $data['parent_id']=$_POST['parent_id'];
    storePost($data);
endif;

function storeAuthor($data){
    $sql = 'INSERT INTO author (name,surname,email) VALUES (:name,:surname,:email)';
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'name' => $data['name'],
        'surname' => $data['surname'],
        'email' => $data['email'],
    ]);
    header ("Location: index.php");
}
function storePost($data){
    $sql = "INSERT INTO post (title,content, parent_id) VALUES (:title,:content, :parent_id)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        "title" => $data['title'],
        "content" => $data['content'],
        "parent_id" => $data['parent_id']
    ]);
    header ("Location: index.php");
}
function authorSelectList(){
    $sql = "SELECT * FROM author";
    $sth = getDB()->query($sql);
    foreach($sth as $row){
        echo "<option value='". $row['id'] ."'>".$row['name']."</option>";
    }
}
