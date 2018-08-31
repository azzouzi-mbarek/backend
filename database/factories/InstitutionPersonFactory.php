<?php

use App\Model\Institution\Institution;
use App\Model\Person\CategoryPerson;
use App\Model\Person\InstitutionPerson;
use App\Model\Person\Person;
use Faker\Generator as Faker;

$factory->define(InstitutionPerson::class, function (Faker $faker) {
    return [
        'person_id' => function () {
            return Person::all()->random();
        },
        'Institution_id' => function () {
            return Institution::all()->random();
        },
        'category_person_id' => function () {
            return CategoryPerson::all()->random();
        },
    ];
});
