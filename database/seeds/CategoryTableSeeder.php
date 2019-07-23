<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{

    
		DB::table('categories')->insert([
			'name' => 'Jabones',
			'top' => true,
			'parent' => 0,
		]);
		DB::table('categories')->insert([
			'name' => 'Aceites',
			'top' => true,
			'parent' => 0,
		]);
		DB::table('categories')->insert([
			'name' => 'Cremas',
			'top' => true,
			'parent' => 0,
		]);
		DB::table('categories')->insert([
			'name' => 'Cabello',
			'top' => true,
			'parent' => 0,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Naturales',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Hipoalergenicos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Liquidos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Exfoliantes',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Corporales',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Para Masajes',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Aromaticos',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Corporales',
			'top' => false,
			'parent' => 3,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Faciales',
			'top' => false,
			'parent' => 3,
		]);
		DB::table('categories')->insert([
			'name' => 'De Manos',
			'top' => false,
			'parent' => 3,
		]);
		DB::table('categories')->insert([
			'name' => 'Shampoo',
			'top' => false,
			'parent' => 3,
		]);
		DB::table('categories')->insert([
			'name' => 'Acondicionador',
			'top' => false,
			'parent' => 3,
		]);
		DB::table('categories')->insert([
			'name' => 'Baño de Crema',
			'top' => false,
			'parent' => 3,
		]);
	}
}