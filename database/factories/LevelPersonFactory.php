<?php

use App\Model\Level\Level;
use App\Model\Person\CategoryPerson;
use App\Model\Person\LevelPerson;
use App\Model\Person\Person;
use Faker\Generator as Faker;

$factory->define(LevelPerson::class, function (Faker $faker) {
    return [
        'person_id' => function () {
            return Person::all()->random();
        },
        'level_id' => function () {
            return Level::all()->random();
        },
        'category_person_id' => function () {
            return CategoryPerson::all()->random();
        },
    ];
});
