<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            DB::table('products')->insert([
              'name' => Str::random(10),
              'price' => 100,
            ]); 
          }
    }
}
