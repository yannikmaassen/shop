<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class CategoryController extends \App\Http\Controllers\Controller
{
    public function showOne($id)
    {
        $products = \App\Product::all();
        $category = \App\Category::findOrFail($id);
        return view('frontend/categories/show', ['category' => $category, 'products' => $products]);
    }
}
