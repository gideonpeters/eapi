<?php

use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30)
    ];
});
