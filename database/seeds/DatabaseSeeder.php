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
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);

      		
			DB::table('users')->insert([
                'first_name' => 'Marcos',
                'last_name' => 'Ferrini',
                'email' => 'marcos@dh.com',
                'password' => bcrypt('123456'),
                'role' => '1',
                'avatar' => '2c4TGKGmvVmjZvYtRWjq6OXmTfqxEF7gPjRoN0GD.jpeg',
            ]);
      
          DB::table('users')->insert([
            'first_name' => 'Valeria',
            'last_name' => 'V',
            'email' => 'valeria@dh.com',
            'password' => bcrypt('123456'),
            'role' => '2',
            'avatar' => '2c4TGKGmvVmjZvYtRWjq6OXmTfqxEF7gPjRoN0GD.jpeg',
          ]);

          DB::table('users')->insert([
            'first_name' => 'Ignacio',
            'last_name' => 'V',
            'email' => 'ignacio@dh.com',
            'password' => bcrypt('123456'),
            'role' => '2',
            'avatar' => 'CGnABxNYYn8N23RWlvTTP6C2nRjOLTf8IJcbLqRP.jpeg',
          ]);

          DB::table('users')->insert([
            'first_name' => 'Adela',
            'last_name' => 'V',
            'email' => 'adela@dh.com',
            'password' => bcrypt('123456'),
            'role' => '1',
            'avatar' => '8zlz2iOQplIhJukCC55wYm3nrR8QqMIU1VJM4Tpv.jpeg',
          ]);
    }
}
