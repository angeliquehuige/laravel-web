<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'location' => $faker->country,
        'month' => $faker->monthName,
        'year' => $faker->year,
        'mainpic' => $faker->imageUrl($width = 300, $height = 200),
        'description' => $faker->text(250),
        'body' => $faker->paragraphs(3, true),
    ];
});
