<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function pay(Cart $cart)
    {
        if (Auth::check()) {
            return view('user.pay', compact('cart'));
        } else return redirect()->route('user.login')->with('error', 'Vui lòng đăng nhập để thanh toán');
    }

    public function paid(Request $request, Cart $cart)
    {
        
        $userId = Auth::id();
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $add_infor = $request->add_infor;
        $price = $cart->totalPrice();
        $order = Order::create([
            'user_id' => $userId,
            'cus_name' => $name,
            'phone' => $phone,
            'address' => $address,
            'add_infor' => $add_infor,
            'price' => $price,
        ]);

        if ($order) {
            foreach ($cart->list() as $item) {
                OrderDetails::create([
                    'order_id' => $order->id,
                    'product_id' => $item['productID'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }
        }
        $cart->deleteAll();
        return redirect()->route('cart.index')->with('success', 'Thanh toán thành công');
    }
}
