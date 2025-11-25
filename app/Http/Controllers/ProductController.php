<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // SHOW ALL PRODUCTS
    public function index()
    {
        $products = Product::all();
        return view('product_table', compact('products'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        $categories = Category::all();
        return view('create_product', compact('categories'));
    }

    // STORE NEW PRODUCT
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'stock' => 'required|integer',
            'status' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // SHOW EDIT FORM
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('edit_product', compact('product', 'categories'));
    }

    // UPDATE PRODUCT
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'stock' => 'required|integer',
            'status' => 'required'
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // DELETE PRODUCT
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted!');
    }
}
