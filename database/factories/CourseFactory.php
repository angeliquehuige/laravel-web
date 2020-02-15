<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        "name" => $faker->words(3, true),
        "ec" => $faker->randomElement($array = array(2.5, 5, 7.5, 10))
    ];
});
