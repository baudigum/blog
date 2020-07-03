<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
          'title' => Str::random(10),
          'amount' => rand(0,10),
          'price' => rand(0,200),
          'user_id' => rand(1,10),
      ]);
    }
}
