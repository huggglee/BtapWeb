<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('User.home', compact('products'));
    }
    public function show($id)
    {
        $category=Category::find($id);
        $products=$category->products()->get();
        // dd($products);
        return view('user.list-1',compact('products','category'));
    }
    public function gioithieu()
    {
        return view('user.gioithieu');
    }
    public function new()
    {
        return view('user.new');
    }
    public function tracuu()
    {
        return view('user.tracuu');
    }
}
