<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //index
    public function index()
    {
        $product = Product::all();

        return view('product.index', compact('product'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function edit($id)
    {
        $pd = Product::find($id);
        return view('product.edit', compact('pd'));
    }

    // Store method for Product
    public function store(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'product_category' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);
        $product = Product::create($request->all());
        return redirect()->route('product')
            ->with('success', 'Product created successfully.');
    }

    // Edit method for Product
    public function update (Request $request, $id)
    {
        $request->validate(rules: [
            'product_name' => 'required',
            'product_category' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);
        $update = [
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            'product_price' => $request->product_price,
            'product_image' => $request->product_image,
            'product_description' => $request->product_description,
        ];
        Product::whereId($id)->update($update);
        return redirect()->route(route: 'product')
            ->with(key: 'success', value: 'Product updated successfully');
    }
}
