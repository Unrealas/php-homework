<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-04-16
 * Time: 15:08
 */

$movies = [
    'Inception',
    'Thor: Ragnarok',
    'Cloud Atlas',
    'Back to the Future'
];
echo "Mano megstamiausi filmai : <ol>";

foreach ($movies as $movie) {
    echo "<li>$movie</li>";
}

$shopping_cart = [
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
