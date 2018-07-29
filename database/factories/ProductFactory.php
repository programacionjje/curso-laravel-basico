<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence,
        "description" => $faker->text,
        "price" => $faker->numberBetween(100, 500),
    ];
});
