<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('porto.checkout', compact('products'));
    }

    
}

