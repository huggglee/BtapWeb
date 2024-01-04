<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        return view('user.cart', compact('cart'));
    }
    public function add(Request $request, Cart $cart)
    {
        // dd($request->all());
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);
        return redirect(route('cart.index'));
    }
    public function delete(int $productID, Cart $cart)
    {
        $cart->delete($productID);
        return redirect()->route('cart.index');
    }
    public function deleteAll(Cart $cart)
    {
        $cart->deleteAll();
        return redirect()->route('cart.index');
    }
    public function update(Request $request, Cart $cart)
    {
        $temp = $request->product;
        foreach ($temp as $key => $value) {
            $cart->update($key, $value);
        }
        return redirect()->route('cart.index');
    }

    
}
