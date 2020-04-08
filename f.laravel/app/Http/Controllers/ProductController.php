<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $product = Product::all();
        return view('shop.index', ['products' => $product]);
    }
    public function getAddToCart(Request $request, $id)
    {
        // $product = Product::find($id);
        // $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Cart($oldCart);
        // $cart->add($product, $product->id);
        // $request->session()->put('cart', $cart);
        $product = Product::find($id);
        $cart = Session::has('cart') ? Session::get('cart') : null;

        if (!$cart) {
            $cart = new Cart($cart);
        }

        $cart->add($product, $product->id);

        Session::put('cart', $cart);
        $request->session()->put('cart', $cart);
        // var_dump($request->session()->get('cart'));
        // dd($request->session()->get('cart'));

        return redirect()->route('product.index');
    }
}
