<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;


$factory->define(Product::class, function (Faker $faker){
    return [
        'name' => $faker->name,
        'category' => $faker->company,
        'price' => $faker->numberBetween(50,300)
    ];
});
