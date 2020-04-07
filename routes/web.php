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

Route::get('/', function () {
    return view('frontend/home', [
        'products' => App\Product::take(4)->get(),
        'categories' => App\Category::all(),
    ]);
});

Route::get('/admin', function () {
    return view('backend/home', [
        'productsCount' => App\Product::count(),
        'categoriesCount' => App\Category::count(),
    ]);
});

Route::get('/products', function () {
    return view('frontend/products', [
        'products' => App\Product::all(),
    ]);
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
