<?php

use App\Model\Institution\CategoryInstitution;
use Faker\Generator as Faker;

$factory->define(App\Model\Institution\Institution::class, function (Faker $faker) {
    return [
        'category_institution_id' => function () {
            return CategoryInstitution::all()->random();
        },
        'name'=> $faker->company,
    ];
});
