<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Blog\Post;

$factory->define(Post::class, function (Faker $faker){
    return [
        'title' => $faker->sentence(rand(3,8), true),
        'text' => $faker->text,
        'author_id' => rand(1,3)
    ];
});
