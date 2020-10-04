<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            DB::table('customers')->insert([
              'name' => Str::random(10),
              'address'  => Str::random(10),
            ]); 
          }
    }
}
