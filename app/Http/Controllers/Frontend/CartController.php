<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // validate input
        $data = $request->validate([
            'id' => 'required|integer',
            'qty' => 'required|integer'
        ]);

        // get cart from session
        $cart = [];
        if (session()->has('cart')) {
            $cart = session()->get('cart');
        }

        // add product to cart
        $id = (int) $data['id'];
        $qty = (int) $data['qty'];
        if (isset($cart[$id])) {
            $cart[$id] += $qty;
        } else {
            $cart[$id] = $qty;
        }

        // put cart into session
        session()->put('cart', $cart);

        // redirect to cart view
        return redirect('/cart');
    }

    public function cart()
    {
        $id = session()->get('cart');
        $products = \App\Product::find(array_keys($id));

        // if ($id === null) {
        //     echo 'Der Warenkorb ist nicht gefüllt.';
        // }

        return view('frontend/cart', [
            'products' => $products,
            // 'product_qty' => $product_qty

        ]);
    }


    // public function cart()
    // {
    //     $ids = session()->array_keys();
    //     $products = \App\Product::find($ids)->toArray();
    //     return view('frontend/cart', [
    //         'products' => $products
    //     ]);
    // }

    public function updateCart()
    {
    }

    public function removeFromCart()
    {
    }
}
