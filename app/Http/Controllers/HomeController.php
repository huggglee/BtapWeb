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
        $product=$category->products()->get();
        
    }
}
