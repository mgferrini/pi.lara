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
        'image' => collect( ['jabon1.jpg', 'jabon2.jpg','jabon3.jpg','jabon4.jpg','jabon5.jpg','jabon6.jpg','jabon7.jpg','jabon8.jpg', 'jabon9.jpg','jabon10.jpg','jabon11.jpg','jabon12.jpg','aceite1.jpg','aceite2.jpg','aceite3.jpg','aceite4.jpg','aceite5.jpg','aceite5.jpg','aceite7.jpg','aceite7.jpg','crema1.jpg','crema2.jpg','crema3.jpg','crema3.jpg','crema5.jpg','crema6.jpg','crema7.jpg','crema8.jpg','crema9.jpg','crema10.jpg','shampoo1.jpg','shampoo2.jpg','shampoo3.jpg','shampoo4.jpg','shampoo5.jpg','shampoo6.jpg',] )->random(),
        'category_id'=>$faker->numberBetween(5,17),
    
];
});

  

