<?php

use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
 
      
 
        // insert data dummy pegawai dengan faker
        DB::table('poli')->insert([
            'KodePoli' => $faker->unique()->randomNumber,
            'NamaPoli' => $faker->name,
            'Deskripsi' => $faker->paragraph,
        ]);
 
        
    }
}
