<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends \App\Http\Controllers\Controller
{
    public function show(Product $product)
    {
        return view('frontend/products/show', [
            'products' => $product
        ]);
    }
}
