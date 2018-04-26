<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-26
 * Time: 15:07
 */

class ShoppingCart{
    private $items = [];
    private $date;

    public function addItem(ShoppingCartItem $item){
        $this->items[]=$item;
    }
    public function getItems(){
        return $this->items;
    }
}