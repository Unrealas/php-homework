<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-26
 * Time: 14:17
 */

class Post{
    const MAX_LENGTH= 300;

    private $title;
    private $content;
    private $author;

    public function setTitle($title){
        $this-> title = $title;
    }
   public function getTitle(){
       return $this->title;
   }
    public function setContent($content){
        if(strlen($content)< self::MAX_LENGTH){
            $this-> content = $content;
        }else{
            echo 'Character max length is: '.self::MAX_LENGTH;
        }
    }
    public function getContent(){
        return $this->content;
    }
    public function setAuthor(Person $author){
        $this-> author = $author;
    }
    public function getAuthor(){
        return $this->author;
    }
}