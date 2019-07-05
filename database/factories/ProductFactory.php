<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio',
        'rating'=>$faker->randomFLoat(1,3,5),
        'price'=>$faker->numberBetween(300, 1000),
        'components'=>$faker->name,
        'details'=>$faker->paragraph,
        'stock'=>$faker->numberBetween(1, 200),
        'image'=>'jabon1.jpg',
        'category_id'=>$faker->numberBetween(5,17),
    
];
});

  

