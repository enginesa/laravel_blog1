<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use App\Models\Categories;
use App\Models\Posts;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories=Categories::getAllCategory();
        View::share('categories', $categories);
    }
}
