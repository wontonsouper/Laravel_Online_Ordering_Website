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
    $cart = session()->get('cart', []);
    return view('porto.checkout', compact('cart'));
}

    
}

