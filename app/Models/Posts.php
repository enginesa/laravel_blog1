<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $hidden = ["updated_at"];


    public function getCategory()
    {
        return $this->hasOne("App\Models\Categories","id","category_id");
    }

    public static function getPostsMaxHit(){
        return "test";
    }


}
