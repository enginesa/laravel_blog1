<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

//    public function getPosts(){
//
//        return $this->hasMany('App\Models\Posts', 'category_id', 'id');
//
//    }

public static function getAllCategory(){
   return Categories::query()
        ->selectRaw('count(posts.category_id) as posts_count,categories.name')
        ->leftJoin("posts","posts.category_id","=","categories.id")
        ->orderByDesc("posts_count")
        ->groupBy("category_id")
        ->get();
}



}
