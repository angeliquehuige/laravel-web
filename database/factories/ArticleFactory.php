<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'excerpt' => $faker->text(250),
        'body' => $faker->paragraphs(3, true),
    ];
});
