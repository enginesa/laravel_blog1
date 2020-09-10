<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;


class Home extends Controller
{

    public function index()
    {


        $viewData=array(
          "posts"=>Posts::query()->get(),
          "postsMaxHit"=>Posts::getPostsMaxHit()
        );
        return view("front.pages.home.home",$viewData);
    }
}
