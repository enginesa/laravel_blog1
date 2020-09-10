<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'slug' => Str::slug("yaşam için kalite"),
            'title' => "yaşam için kalite",
            'text' => "Yeni gelne cihazlarla artık daha iyi nefes alınacak",
            'category_id' => 1,
        ]);
        DB::table('posts')->insert([
            'slug' => Str::slug("yeni kitap çıktı"),
            'title' => "yeni kitap çıktı",
            'text' => "Kitaplarla artık daha fazla okunma sağlanacak",
            'category_id' => 2,
        ]);
        DB::table('posts')->insert([
            'slug' => Str::slug("yeni yıl dergisi artık ücretsiz"),
            'title' => "yeni yıl dergisi artık ücretsiz",
            'text' => "dergilerle artık bu yıl ücret yansımayacak",
            'category_id' => 2,
        ]);
    }
}
