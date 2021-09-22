<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use \App\Models\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        User::FIRST_NAME_COLUMN => $faker->firstName,
        User::LAST_NAME_COLUMN => $faker->lastName,
        User::COUNTRY_ID=>$faker->numberBetween(1,10),
    ];
});
