<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->word,
        'title' => $faker->sentence($variableNbWords = true),
        'content' => $faker->paragraphs($nb = 3, $asText = true),
        'category' => $faker->randomElement(['fighting', 'coding', 'life'], $asText = true),
        'views' => $faker->randomDigit,
        'featured_image' => $faker->word
    ];
});
