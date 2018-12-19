<?php

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['bjj', 'guitar', 'cancer', 'programming', 'video games'])
    ];
});
