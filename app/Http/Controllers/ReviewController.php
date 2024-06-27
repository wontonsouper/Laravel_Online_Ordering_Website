<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    // Index method to list all reviews
    public function index()
    {
        Log::info('Fetching all reviews');
        $review = Review::all();

        return view('review.index', compact('review'));
    }

    // Show the form to create a new review
    public function create()
    {
        Log::info('Fetching all approved reviews');
        $reviews = Review::where('review_approved', true)->get();
        
        return view('review.create', compact('reviews'));
    }

    // Store a new review
    public function store(Request $request)
    {
        $request->validate([
            'review_name' => 'required',
            'review_text' => 'required',
        ]);

        Log::info('Creating new review', [
            'review_name' => $request->input('review_name'),
            'review_text' => $request->input('review_text'),
        ]);

        $review = Review::create([
            'review_name' => $request->input('review_name'),
            'review_text' => $request->input('review_text'),
            'review_approved' => false,
        ]);

        if ($review) {
            return redirect()->route('index')->with('success', 'Review submitted successfully.');
        } else {
            Log::error('Failed to submit review', [
                'review_name' => $request->input('review_name'),
                'review_text' => $request->input('review_text'),
            ]);
            return redirect()->back()->with('error', 'Failed to submit review.');
        }
    }

    // Update/Approve a review
    public function approve(Request $request, $id)
    {
        $request->validate(rules: [
            'review_approved' => 'required',
        ]);

        $review = Review::find($id);
        if (!$review) {
            return redirect()->route('review')->with('error', 'Review not found.');
        }

        Log::info('Updating review approval status', [
            'review_id' => $id,
            'new_approval_status' => $request->review_approved,
        ]);

        $review->review_approved = $request->review_approved;
        $review->save();

        return redirect()->route('review')->with('success', 'Review updated successfully');
    }

    // Delete a review
    public function destroy($id)
    {
        $review = Review::find($id);
        if (!$review) {
            return redirect()->route('review')->with('error', 'Review not found.');
        }

        Log::info('Deleting review', ['review_id' => $id]);

        $review->delete();

        return redirect()->route('review')->with('success', 'Review deleted successfully.');
    }
}
