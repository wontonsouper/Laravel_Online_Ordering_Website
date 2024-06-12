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

}
