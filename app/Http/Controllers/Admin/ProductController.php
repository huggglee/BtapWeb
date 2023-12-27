<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = null;
        $product = Product::paginate(10);
        return view('Admin.Product.product', compact('product', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('Admin.Product.product_add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images', $fileName);
            $request->merge(['img' => $fileName]);
        }
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        return view('Admin.Product.product_edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images', $fileName);
            $request->merge(['img' => $fileName]);
        }
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
    public function find(Request $request)
    {
        $search = $request->search;
        $product = product::where('id', $search)->orwhere('name', 'like', '%' . $search . '%')->orwhere('price', $search)->paginate(10);
        return view('admin.product.product', compact('product', 'search'));
    }
}
