<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/products/index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = new Product();
        // $product->name = $validatedData['name'];
        // $product->description = $validatedData['description'];
        // $product->price = $validatedData['price'];
        // $product->msrp = $validatedData['msrp'];
        // $product->stock = $validatedData['stock'];
        // $product->save();

        Product::create($this->validateData());        // should be the same as all the lines above

        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend/products/edit', ['products' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($this->validateData());

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('admin/products');
    }

    private function validateData()
    {
        return request()->validate([
            'name' => ['required', 'min:3'],
            'price' => 'required|numeric|between:0,9999.99',
            'description' => 'required|min:20',
            'msrp' => 'numeric|between:0,9999.99',
            'stock' => 'integer'
        ]);
    }
}
