<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AdminUser;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(AdminUser::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '0000', // password
        'remember_token' => Str::random(10),
        'ID_number' => $faker->randomNumber($nbDigits= 8)
    ];
});
