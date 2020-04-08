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

Route::get('/admin', function () {
    return view('backend/home', [
        'productsCount' => App\Product::count(),
        'categoriesCount' => App\Category::count(),
    ]);
});

Route::get('/admin/products', function () {
    return view('backend/products/index', [
        'productsCount' => App\Product::count(),
        'categoriesCount' => App\Category::count(),
    ]);
});

Route::get('/admin/products/create', function () {
    return view('backend/products/create');
});

Route::get('/admin/products/edit', function () {
    return view('backend/products/edit');
});

Route::get('/admin/categories', function () {
    return view('backend/categories/index', [
        'productsCount' => App\Product::count(),
        'categoriesCount' => App\Category::count(),
    ]);
});

Route::get('/admin/categories/create', function () {
    return view('backend/categories/create');
});

Route::get('/admin/categories/edit', function () {
    return view('backend/categories/edit');
});

Route::get('/admin/orders', function () {
    return view('backend/orders/index', [
        'productsCount' => App\Product::count(),
        'categoriesCount' => App\Category::count(),
    ]);
});

Route::get('/admin/orders/show', function () {       //TODO
    return view('backend/orders/show');
});

Route::get('/admin/users', function () {
    return view('backend/users/index', [
        'productsCount' => App\Product::count(),
        'categoriesCount' => App\Category::count(),
    ]);
});

Route::get('/admin/users/create', function () {
    return view('backend/users/create');
});

Route::get('/admin/users/edit', function () {
    return view('backend/users/edit');
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
