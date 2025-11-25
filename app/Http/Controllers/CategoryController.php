<?php

namespace App\Http\Controllers;

use App\Models\Category;  // ← Corrected
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // SHOW ALL CATEGORIES
    public function index()
    {

        $categories = Category::latest()->get();
        return view('catagory_table', compact('categories'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        return view('catagory_product');
    }

    // STORE NEW CATEGORY
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'status' => 'required'
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    // SHOW EDIT FORM
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('edit_catagory', compact('category'));
    }

    // UPDATE CATEGORY
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // DELETE CATEGORY
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted!');
    }
}
