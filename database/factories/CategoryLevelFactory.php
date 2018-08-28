<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Level\CategoryLevel::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
