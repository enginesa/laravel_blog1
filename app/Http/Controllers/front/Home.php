<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Home extends Controller
{

    public function index()
    {
        $posts=Posts::query()->get();


        $viewData=array(
          "posts"=>$posts
        );
        return view("front.pages.home.home",$viewData);
    }
}
