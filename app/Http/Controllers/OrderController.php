<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function orderpage(Request $request)
    {
        // Log the entry into the orderpage method
        Log::info('Entering orderpage method', ['request' => $request->all()]);

        // Retrieve the selected category, minimum/maximum price filter values, sorting option, and search keywords
        $selectedCategory = $request->input('category');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $sortingOption = $request->input('sorting', 0);
        $searchKeywords = $request->input('search');

        // Fetch categories
        $categories = Product::select('product_category')->distinct()->get();

        // Fetch products based on the selected category, price range, and search keywords
        $query = Product::query();

        // Apply category filter
        if ($selectedCategory && $selectedCategory !== 'all') {
            $query->where('product_category', $selectedCategory);
        }

        // Apply price range filter
        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('product_price', [$minPrice, $maxPrice]);
        } elseif ($minPrice !== null) {
            $query->where('product_price', '>=', $minPrice);
        } elseif ($maxPrice !== null) {
            $query->where('product_price', '<=', $maxPrice);
        }

        // Apply search filter (case-insensitive for MySQL)
        if ($searchKeywords) {
            $query->where(function ($q) use ($searchKeywords) {
                $q->where('product_name', 'like', '%' . $searchKeywords . '%')
                  ->orWhere('product_description', 'like', '%' . $searchKeywords . '%');
            });
        }

        // Apply sorting
        if ($sortingOption == 1) {
            $query->orderByDesc('product_price');
        } elseif ($sortingOption == 2) {
            $query->orderBy('product_price');
        }

        $products = $query->get();

        // Log the products fetched
        Log::info('Products fetched', ['products' => $products]);

        // Return the view with the filtered products, categories, sorting option, and search keywords
        return view('porto.orderpage', compact('categories', 'products', 'sortingOption', 'searchKeywords'));
    }

    public function index()
    {
        Log::info('Fetching all orders with their products');
        $orders = Order::with('orderProducts')->get();
        return view('order.index', compact('orders'));
    }

    // Store method
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            Log::info('Creating order for table:', ['table' => $request->order_table]);

            // Create the order
            $order = Order::create([
                'order_table' => $request->order_table,
                'order_note' => $request->order_note,
                'order_status' => 'pending',
                'order_total' => 0,
            ]);

            $totalPrice = 0;

            // Get products from the cart
            $cart = session()->get('cart', []);

            if (empty($cart)) {
                Log::error('Cart is empty');
                throw new \Exception("Cart is empty");
            }

            foreach ($cart as $id => $product) {
                Log::info('Processing product:', ['id' => $id, 'quantity' => $product['quantity']]);
                $productDetails = Product::find($id);

                if ($productDetails) {
                    $totalPrice += $productDetails->product_price * $product['quantity'];

                    // Create OrderProduct entry
                    OrderProduct::create([
                        'order_id' => $order->id,
                        'product_id' => $productDetails->id,
                        'product_name' => $productDetails->product_name,
                        'product_price' => $productDetails->product_price,
                        'quantity' => $product['quantity'],
                        'total_price' => $productDetails->product_price * $product['quantity'],
                    ]);
                }
            }

            // Update the order with the total price
            $order->update(['order_total' => $totalPrice]);

            DB::commit();

            Log::info('Order placed successfully', ['order_id' => $order->id]);

            // Clear the cart after successful order placement
            session()->forget('cart');

            return redirect()->route('order.success')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Order creation failed:', ['message' => $e->getMessage()]);
            return redirect()->route('orderpage')->with('error', 'Failed to place order. Please try again.');
        }
    }

    public function success()
    {
        Log::info('Order placed successfully, displaying success page');
        return view('order.success');
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        Log::info('Updating order status', ['order_id' => $id, 'status' => $request->input('order_status')]);
        $order->order_status = $request->input('order_status');
        $order->save();

        return redirect()->route('order')->with('success', 'Order status updated successfully!');
    }

    public function show(Order $order)
    {
        Log::info('Showing order details', ['order_id' => $order->id]);
        return view('order.show', compact('order'));
    }
}
