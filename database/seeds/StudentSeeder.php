<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 1000; $i++) { 
        DB::table('students')->insert([
          'name' => Str::random(10),
          'gender' => Str::random(10),
          'dob' => Str::random(4)
        ]); 
      }
    }
}
