<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Query;
use App\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $totalMsg = Query::count();
        if ($totalMsg > 0) {
               \View::share('totalmessage', $totalMsg);
           }
        else{
            $totalMsg=0;
            \View::share('totalmessage', $totalMsg);
        }   
        
        //following code for navbar

        $categories = Category::with('subcategories')->get();
        \View::share('categories',$categories);
    }
}
