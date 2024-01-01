<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductEditRequest;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(ProductRequest $request)
    {
        DB::beginTransaction();
        if ($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images', $fileName);
            $request->merge(['img' => $fileName]);
        }
        Product::create($request->all());
        // Cập nhật lại các ID tăng dần
        DB::statement('SET @new_id = 0;');
        DB::statement('UPDATE products SET id = (@new_id := @new_id + 1);');

        // Commit thay đổi
        DB::commit();
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
    public function update(ProductEditRequest $request, Product $product)
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
        DB::beginTransaction();

        $product->delete();
        DB::statement('SET @new_id = 0;');
        DB::statement('UPDATE products SET id = (@new_id := @new_id + 1);');

        // Commit thay đổi
        DB::commit();
        return redirect()->route('product.index');
    }
    public function find(Request $request)
    {
        $search = $request->search;
        $product = product::where('id', $search)->orwhere('name', 'like', '%' . $search . '%')->orwhere('price', $search)->paginate(10);
        return view('admin.product.product', compact('product', 'search'));
    }
}
