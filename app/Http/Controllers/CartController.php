<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('porto.cart', compact('cart'));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->product_price,
                "image" => $product->product_image
            ];
        }

        session()->put('cart', $cart);

        Log::info('Product added to cart', ['product_id' => $id, 'product_name' => $product->product_name]);

        return redirect()->route('cart')->with('success', 'Product added to cart!');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);

            Log::info('Cart updated', ['product_id' => $id, 'new_quantity' => $request->quantity]);
        }

        return redirect()->route('cart')->with('success', 'Cart updated successfully');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);

            Log::info('Product removed from cart', ['product_id' => $id]);
        }

        return redirect()->route('cart')->with('success', 'Product removed from cart!');
    }
}
