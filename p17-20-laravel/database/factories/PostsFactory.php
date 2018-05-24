<?php

use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'content' => $faker->text,
        'author' => 0,
        'seen' => rand(0,1)
    ];
});
