<?php

use App\Model\Region;
use Faker\Generator as Faker;

$factory->define(App\Model\Country::class, function (Faker $faker) {
    return [
        'region_id' => function(){
            return Region::all()->random();
        },
        'name' => $faker->city,
    ];
});
