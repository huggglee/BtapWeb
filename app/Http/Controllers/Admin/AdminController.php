<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.admin_login');
    }
    public function dashboard()
    {
        $totalOrder = Order::count();
        $totalQuantity = OrderDetails::sum('quantity');
        $totalPrice = Order::sum('price');
        $bestSellingProduct = OrderDetails::select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->orderByDesc('total_quantity')
            ->first();
            
        if ($bestSellingProduct) {
            $best_quan=$bestSellingProduct->total_quantity;
            $bestSellingProductInfo = Product::find($bestSellingProduct->product_id);
        }
        return view('Admin.dashboard', compact('totalOrder','totalQuantity', 'totalPrice','bestSellingProductInfo','best_quan'));
    }
    public function order()
    {
        $totalPrice = Order::sum('price');
        $order=Order::all();
        return view('Admin.order',compact('order','totalPrice'));
    }
    public function login(Request $request)
    {
        $admin_username = $request->admin_name;
        $admin_password = $request->admin_pass;
        $result = Admin::where('username', $admin_username)->where('password', $admin_password)->first();
        if ($result) {
            Session()->put('admin_username', $result->username);
            Session()->put('admin_id', $result->id);
            return redirect()->route('admin.dashboard');
        } else {
            Session()->put('msg', 'Tài khoản hoặc mật khẩu không chính xác');
            return redirect()->route('admin.index');
        }
    }
    public function logout()
    {
        Session()->put('admin_username', null);
        Session()->put('admin_id', null);
        return redirect()->route('admin.index');
    }
}
