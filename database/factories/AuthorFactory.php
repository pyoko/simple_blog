<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name'     => $faker->name,
        'role'     => $faker->randomElement(['orc', 'human', 'elf', 'demon']),
        'avatar'   => 'https://www.placecage.com/60/60',
        'location' => $faker->city,
    ];
});
