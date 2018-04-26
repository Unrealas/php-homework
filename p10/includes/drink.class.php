<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-26
 * Time: 15:35
 */

class Drink{
    protected $name;

    protected function setDrinkName($name){
        $this->name=$name;
    }
    public function getDrinkName(){
        return $this->name;
    }
}