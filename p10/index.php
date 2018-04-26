<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-26
 * Time: 15:05
 */

spl_autoload_register(function ($class) {
    include 'includes/' . $class . '.class.php';
});

//---------------1-------------\\

$cart = new ShoppingCart;
$item = new ShoppingCartItem;
$item->name = "Tarchunas";
$item->price = 1.5;
$item->quantity = 1;
$item->id = 1;
$cart->addItem($item);
var_dump($cart->getItems());

//---------------2-------------\\


$coffee = new Coffee;
echo "My favorite drink in the morning is: ".$coffee->getDrinkName();