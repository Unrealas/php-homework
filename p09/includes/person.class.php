<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-26
 * Time: 14:41
 */

class Person{

    private $id;
    private $name;

    public function setId($id){
        $this-> id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setName($name){
        $this-> name = $name;
    }
    public function getName(){
        return $this->name;
    }
}