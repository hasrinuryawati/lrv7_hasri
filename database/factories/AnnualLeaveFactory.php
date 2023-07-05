<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AnnualLeave;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    return [
        'user_id'     => factory(App\User::class),
        'from_date'   => now(),
        'to_date'     => now(),
        'description' => $faker->text(),
    ];
});
