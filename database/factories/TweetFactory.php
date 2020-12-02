<?php

use Faker\Generator as Faker;

$factory->define(App\Tweet::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence
    ];
});
