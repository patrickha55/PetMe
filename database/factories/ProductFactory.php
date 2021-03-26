<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
       'pro_cat_id' =>function(){
           return factory(\App\Category::class)->create()-id;
       },
       'name'=>$faker->productName,
        'description' => $faker->text(),
        'price' => $faker->randomNumber(4),
       'stock'=>$faker->randomNumber(2),
      
        
    ];
});

