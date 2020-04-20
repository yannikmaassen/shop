<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends \App\Http\Controllers\Controller
{
    public function show(Category $category)
    {
        $products = $category->products()->paginate(8);

        return view('frontend/categories/show', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
