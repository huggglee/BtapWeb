<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryEditRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryRequest;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.Category.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.add_Category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            Category::create($request->all());
            // Cập nhật lại các ID tăng dần
            DB::statement('SET @new_id = 0;');
            DB::statement('UPDATE categories SET id = (@new_id := @new_id + 1);');

            // Commit thay đổi
            DB::commit();
            return redirect()->route('category.index');
        } catch (\Exception $e) {
            // Rollback nếu có lỗi xảy ra
            DB::rollback();
            throw $e;
        }
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
    public function edit(Category $category)
    {
        return view('Admin.Category.category_edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryEditRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        DB::beginTransaction();
        try {
            $category->delete();
            // Cập nhật lại các ID tăng dần
            DB::statement('SET @new_id = 0;');
            DB::statement('UPDATE categories SET id = (@new_id := @new_id + 1);');

            // Commit thay đổi
            DB::commit();
            return redirect()->route('category.index');
        } catch (\Exception $e) {
            // Rollback nếu có lỗi xảy ra
            DB::rollback();
            throw $e;
        }
    }
}
