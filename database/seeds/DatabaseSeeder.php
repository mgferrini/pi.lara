<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(CategoriaSeeder::class);
      $this->call(ProductTableSeeder::class);
			
			
			DB::table('users')->insert([
            'name' => 'Marcos',
            'first_name' => 'Marcos',
            'last_name' => 'Ferrini',
            'email' => 'mferrini@hotmail.com',
            'password' => bcrypt('123456'),
            'profile' => '9',
        ]);
       
       /*App\User::updateOrCreate([
            'name' => 'Marcos',
            'email' => 'mferrini@hotmail.com',
            'password' => bcrypt('123456'),
            'profile' => '9',
        ]);*/
    }
}
