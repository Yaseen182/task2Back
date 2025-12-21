<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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

    // STORE NEW PRODUCT (Form Request)
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    // EDIT FORM
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // UPDATE PRODUCT (Form Request)
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

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
