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
// FRONTEND ROUTES

Route::get('/', function () {
    // $cartAmount = session()->has('cart') ? count(session()->get('cart')) : 0;
    return view('frontend/home', [
        'products' => App\Product::take(4)->get(),
        'categories' => App\Category::all(),
        // 'cartAmount' => $cartAmount
    ]);
});

Route::get('/products', function () {
    return view('frontend/products', [
        'products' => App\Product::all(),
    ]);
});

Route::get('/categories', function () {
    return view('frontend/categories', [
        'categories' => App\Category::all(),
    ]);
});

Route::get('/categories/{category}', 'CategoryController@show');


Route::get('/products/{product}', 'ProductController@show');

Route::get('/cart',           'CartController@cart');
Route::post('/cart/add',      'CartController@addToCart')->name('addToCart');
Route::patch('/cart/update',  'CartController@updateCart')->name('updateCart');
Route::delete('/cart/remove', 'CartController@removeFromCart')->name('removeFromCart');

Route::get('/search', 'SearchController@index')->name('search');

Route::get('/checkout/shipping',    'CheckoutController@shipping');
Route::post('/checkout/shipping',   'CheckoutController@setShippingAddress');
Route::get('/checkout/payment',     'CheckoutController@payment');
Route::get('/checkout/success',     'CheckoutController@success');
Route::get('/checkout/fail',        'CheckoutController@fail');



// Route::get('/products', function () use ($products) {
//     return view('products', ['products' => $products]);
// });

// Route::get('/products/{id}', function ($id) use ($products) {
//     if (array_key_exists($id, $products)) {
//         return $products[$id];
//     }

//     abort(404, 'Product not found');
// });
