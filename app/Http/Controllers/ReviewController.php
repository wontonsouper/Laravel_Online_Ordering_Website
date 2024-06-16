<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    //index
    public function index()
    {
        $review = Review::all();

        return view('review.index', compact('review'));
    }

    public function create()
    {
        return view('review.create');
    }

    // Store method for Review
    public function store(Request $request)
    {
        $request->validate([
            'review_name' => 'required',
            'review_text' => 'required',
        ]);

        $review = Review::create([
            'review_name' => $request->input('review_name'),
            'review_text' => $request->input('review_text'),
            'review_approved' => false,
        ]);

        if ($review) {
            return redirect()->route('index')->with('success', 'Review submitted successfully.');
        } else {
            // Handle the case where review creation fails, maybe log an error or show an error message.
            return redirect()->back()->with('error', 'Failed to submit review.');
        }
    }

    // Update/Approve method for review
    public function approve(Request $request, $id)
    {
        $request->validate(rules: [
            'review_approved' => 'required',
        ]);
        $update = [
            'review_approved' => $request->review_approved,
        ];
        Review::whereId($id)->update($update);
        return redirect()->route(route: 'review')
            ->with(key: 'success', value: 'Review updated successfully');
    }

    // Destroy method for review
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect()->route('review')->with('success', 'Review deleted successfully.');
    }
}