<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
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
			'name' => 'Terapeuticos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Dermatologicos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Liquidos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Aromaticos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Cosmeticos',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Alimentacion',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categories')->insert([
			'name' => 'Vegetales',
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
	}
}
