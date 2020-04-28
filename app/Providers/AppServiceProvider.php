<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
        try {
            View::share('categories', Category::all());
        } catch (\Exception $e) {
            // categories tables has not been created yet...
        }
        View::composer('*', function ($view) {
            $view->with(
                'cartAmount',
                session()->has('cart') ? count(session()->get('cart')) : 0
            );
        });
    }
}
