<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// BACKEND ROUTES

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('backend/home', [
            'productsCount' => App\Product::count(),
            'categoriesCount' => App\Category::count(),
        ]);
    })->name('home');

    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoryController');

    Route::get('/orders', function () {
        return view('backend/orders/index', [
            'productsCount' => App\Product::count(),
            'categoriesCount' => App\Category::count(),
        ]);
    });

    Route::get('/orders/show', function () {
        return view('backend/orders/show');
    });

    Route::get('/users', function () {
        return view('backend/users/index', [
            'productsCount' => App\Product::count(),
            'categoriesCount' => App\Category::count(),
        ]);
    });

    Route::get('/users/create', function () {
        return view('backend/users/create');
    });

    Route::get('/users/edit', function () {
        return view('backend/users/edit');
    });
});
