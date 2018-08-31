<?php

use App\Model\Country;
use App\Model\Person\CategoryPerson;
use App\Model\Person\CountryPerson;
use App\Model\Person\Person;
use Faker\Generator as Faker;

$factory->define(CountryPerson::class, function (Faker $faker) {
    return [
        'person_id' => function () {
            return Person::all()->random();
        },
        'country_id' => function () {
            return Country::all()->random();
        },
        'category_person_id' => function () {
            return CategoryPerson::all()->random();
        },
    ];
});
