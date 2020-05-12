<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'slug' => $faker->slug,
        'subtitle' => $faker->sentence(5),
        'description' => $faker->text,
        'price' => $faker->numberBetween(15, 300) * 100,
        'image' => 'https://via.placeholder.com/200x250'
    ];
});
