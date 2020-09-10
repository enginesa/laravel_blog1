<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
            'id' =>1,
            'slug' => Str::slug("Yaşam"),
            'name' => "Yaşam",
        ]);
        DB::table('categories')->insert([
            'id' =>2,
            'slug' => Str::slug("Dergi"),
            'name' => "Dergi",
        ]);
    }
}
