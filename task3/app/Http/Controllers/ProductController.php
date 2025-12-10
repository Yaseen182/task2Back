<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // READ ALL
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // CREATE FORM
    public function create()
    {
        return view('products.create');
    }

    // SAVE NEW PRODUCT
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($request->only('name', 'price'));

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    // EDIT FORM
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // UPDATE PRODUCT
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $product->update($request->only('name', 'price'));

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully.');
    }

    // DELETE PRODUCT
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}
