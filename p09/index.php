<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-26
 * Time: 14:14
 */

spl_autoload_register(function ($class) {
    include 'includes/' . $class . '.class.php';
});

$person = new Person();
$person->setName("John");
$person->setId(10);

$post = new Post();
$post->setTitle("My titile");
$post->setContent("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut beatae commodi consectetur consequatur dolore ducimus");

$post->setAuthor($person);

var_dump($post);
