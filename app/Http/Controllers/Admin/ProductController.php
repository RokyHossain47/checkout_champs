<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = \App\Models\Category::where('is_active', 1)->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'sku' => 'required|unique:products',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'nullable|integer',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        \App\Models\Product::create($data);
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $categories = \App\Models\Category::where('is_active', 1)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products,slug,' . $id,
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'sku' => 'required|unique:products,sku,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'nullable|integer',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        $product->update($data);
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
