<?php

use App\Model\Institution\Institution;
use App\Model\Level\CategoryLevelInstitution;
use App\Model\Level\InstitutionLevel;
use App\Model\Level\Level;
use Faker\Generator as Faker;

$factory->define(InstitutionLevel::class, function (Faker $faker) {
    return [
        'institution_id' => function () {
            return Institution::all()->random();
        },
        'level_id' => function () {
            return Level::all()->random();
        },
        'category_level_institution_id' => function () {
            return CategoryLevelInstitution::all()->random();
        },
    ];
});
