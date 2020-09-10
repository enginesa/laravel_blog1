<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $hidden = ["updated_at"];


    public function getCategory()
    {
        return $this->hasOne("App\Models\Categories","id","category_id")->select("name");
    }

    public static function getPostsMaxHit(){
        return Posts::query()
            ->orderByDesc("view_hit")
            ->get();
    }


}
