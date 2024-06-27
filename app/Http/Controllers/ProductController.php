<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    // Index method to list all products
    public function index()
    {
        Log::info('Fetching all products');
        $product = Product::all();

        return view('product.index', compact('product'));
    }

    // Show the form to create a new product
    public function create()
    {
        return view('product.create');
    }

    // Show the form to edit a product
    public function edit($id)
    {
        $pd = Product::find($id);
        if (!$pd) {
            return redirect()->route('product')->with('error', 'Product not found.');
        }

        return view('product.edit', compact('pd'));
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_category' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);

        Log::info('Creating new product', $request->all());

        $product = Product::create($request->all());

        if ($product) {
            return redirect()->route('product')->with('success', 'Product created successfully.');
        } else {
            Log::error('Failed to create product', $request->all());
            return redirect()->back()->with('error', 'Failed to create product.');
        }
    }

    // Update a product
    public function update (Request $request, $id)
    {
        $request->validate(rules: [
            'product_name' => 'required',
            'product_category' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product')->with('error', 'Product not found.');
        }

        Log::info('Updating product', $request->all());

        $product->update($request->all());

        return redirect()->route('product')->with('success', 'Product updated successfully.');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product')->with('error', 'Product not found.');
        }

        Log::info('Deleting product', ['product_id' => $id]);

        $product->delete();

        return redirect()->route('product')->with('success', 'Product deleted successfully.');
    }
}
