<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //დავსიდე ბლოგის თეიბლი
      for ($i=0; $i < 5 ; $i++) {
        // code...

      DB::table('blogs')->insert([
          'title' => Str::random(10),
          'description' => Str::random(50),
      ]);
      }
    }
}
