<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Person\Person::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
