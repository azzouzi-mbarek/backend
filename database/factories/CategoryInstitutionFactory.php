<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Institution\CategoryInstitution::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
