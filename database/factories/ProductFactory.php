<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
		
		//$files = Storage::allFiles(public_path('img/products/'));
	
    return [
        'name' => $faker->word,
        'description' => $faker->text(100),
        'stock' => $faker->randomDigitNotNull,
        'value' => $faker->randomFloat(2,100,1000),
        'image' => collect( ['imagen1.jpg', 'imagen2.jpg','imagen3.jpg','imagen4.jpg','imagen5.jpg','imagen6.jpg','imagen7.jpg',] )->random(),
        //'image' => $faker->image,
        'categorie_id' => App\Category::get()->random()->id
    ];
});
