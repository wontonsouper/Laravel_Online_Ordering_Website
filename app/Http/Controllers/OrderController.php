<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{

    public function index(Request $request)
    {
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
    
        // Return the view with the filtered products, categories, sorting option, and search keywords
        return view('porto.orderpage', compact('categories', 'products', 'sortingOption', 'searchKeywords'));
    }
        
}

