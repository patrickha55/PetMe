<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Male', 'Female']);
    return [
        'firstName' => $faker->firstName($gender),
        'lastName' => $faker->lastName,
        'userName' => $faker->userName,
        'dob' => $faker->dateTimeBetween('-80 years', '-17 years'),
        'gender' => $gender[0],
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => 'password', // password
        'phoneNumber' => $faker->numberBetween($min = 10000000000, $max = 99999999999),
        'remember_token' => Str::random(10),
    ];
});
