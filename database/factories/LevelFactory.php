<?php

use App\Model\Country;
use App\Model\Level\CategoryLevel;
use Faker\Generator as Faker;

$factory->define(App\Model\Level\Level::class, function (Faker $faker) {

    return [
        'country_id' => function () {
            return Country::all()->random();
        },
        'category_level_id' => function () {
            return CategoryLevel::all()->random();
        },
        'level_id' => $faker->numberBetween($min = 1, $max = 50),
        'name' => $faker->city,
    ];
});
