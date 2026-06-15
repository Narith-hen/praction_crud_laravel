<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.list', compact('products'));
    }

    public function create()
    {
        $categories = \App\Models\category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'nullable|integer|exists:categories,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'stock' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['category_id', 'name', 'image', 'price', 'stock', 'description']);

        $data['description'] = $data['description'] ?? '';

        Product::create($data);

        return redirect()->route('products.index');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = \App\Models\category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'nullable|integer|exists:categories,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'stock' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->only(['category_id', 'name', 'image', 'price', 'stock', 'description']));
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
