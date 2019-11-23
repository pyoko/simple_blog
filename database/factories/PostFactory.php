<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body'  => $faker->text,
        'image' => $faker->randomElement(['https://placekitten.com/640/400', 'https://loremflickr.com/640/400']),
    ];
});
