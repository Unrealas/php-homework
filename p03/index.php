<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-16
 * Time: 15:08
 */
//---------------1-------------\\
$movies = [
    'Inception',
    'Thor: Ragnarok',
    'Cloud Atlas',
    'Back to the Future'
];
echo "My favorite movies : <ol>";

foreach ($movies as $movie) {
    echo "<li>$movie</li>";
}
//---------------2-------------\\
$array = [
    [
        'type' => 'vegetables',
        'name' => 'potato',
        'quantity' => '10',
        'price' => '1.0'
    ],
    [
        'type' => 'vegetables',
        'name' => 'onion',
        'quantity' => '5',
        'price' => '0.5'
    ],
    [
        'type' => 'vegetables',
        'name' => 'cucumber',
        'quantity' => '2',
        'price' => '1.2'
    ],
    [
        'type' => 'fruits',
        'name' => 'banana',
        'quantity' => '2',
        'price' => '1.0'
    ],
    [
        'type' => 'fruits',
        'name' => 'apple',
        'quantity' => '3',
        'price' => '1.2'
    ]
];
echo "<br>";



function filter ($array, $type){
    $total = 0;
    foreach($array as $k){
        if($k['type']==$type){
            $total+=$k['quantity']*$k['price'];
            echo "Product ".$k['name']." which quantity is:  ".$k['quantity']. " total price is: ".$total." EUR <br>";
        }
    }
}

filter($array, 'fruits');
filter($array, 'vegetables');

//---------------3-------------\\

echo "<br>";

$strings =['movies','bikes','lakes','beer'];
$empty = [];

function lastElement($array){
    if(!empty($array)){
        echo end($array);
    }else{
        echo "<br>Array is empty";
    }
}

lastElement($strings);
lastElement($empty);