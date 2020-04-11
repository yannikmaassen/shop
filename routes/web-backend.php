<?php

use Illuminate\Support\Facades\Route;

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



Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('backend/home', [
            'productsCount' => App\Product::count(),
            'categoriesCount' => App\Category::count(),
        ]);
    });

    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoryController');

    Route::get('/products/edit', function () {
        return view('backend/products/edit');
    });

    Route::get('/categories/create', function () {
        return view('backend/categories/create');
    });

    Route::get('/categories/edit', function () {
        return view('backend/categories/edit');
    });

    // --------------------

    Route::get('/orders', function () {
        return view('backend/orders/index', [
            'productsCount' => App\Product::count(),
            'categoriesCount' => App\Category::count(),
        ]);
    });

    Route::get('/orders/show', function () {       //TODO
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

// Route::get('/products', function () use ($products) {
//     return view('products', ['products' => $products]);
// });

// Route::get('/products/{id}', function ($id) use ($products) {
//     if (array_key_exists($id, $products)) {
//         return $products[$id];
//     }

//     abort(404, 'Product not found');
// });
