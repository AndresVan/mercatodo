<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\AdminProduct;
use Faker\Generator as Faker;

$factory->define(AdminProduct::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word,
        'price' => $faker->randomNumber($nbDigits= 8),
        'amount' => $faker->randomNumber($nbDigits= 2),
        'photo' => $faker->image('storage/app/public/uploads', 640, 480, null, false),
        'description' => $faker->sentence,

    ];
});

        
