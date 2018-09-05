<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Region::class, function (Faker $faker) {
    return [
        'name' => function () {
            return collect([
                'Afrique orientale',
                'Afrique centrale',
                'Afrique du nord',
                'Afrique occidentale',
                'Afrique australe'
            ])->random();
        },
    ];
});
