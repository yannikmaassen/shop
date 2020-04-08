<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class CategoryController extends \App\Http\Controllers\Controller
{
    public function show(Category $category)
    {
        $products = \App\Product::all();
        return view('frontend/categories/show', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
