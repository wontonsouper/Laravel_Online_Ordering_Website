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



}
