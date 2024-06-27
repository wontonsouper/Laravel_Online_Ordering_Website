<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class MenusController extends Controller
{
    public function index()
    {
        $images = MenuImage::orderBy('order')->get();
        return view('porto.menus', compact('images'));
    }

    public function indexAdmin()
    {
        $images = MenuImage::orderBy('order')->get();
        return view('menu.index', compact('images'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'order' => 'required|integer',
        ]);

        try {
            $imagePath = $request->file('image')->store('public/images/full_menu');
            MenuImage::create([
                'title' => $request->title,
                'image_path' => $imagePath,
                'order' => $request->order,
            ]);

            Log::info('Image uploaded successfully', ['title' => $request->title]);

            return redirect()->route('menu')->with('success', 'Image uploaded successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to upload image', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to upload image.');
        }
    }

    public function edit($id)
    {
        $image = MenuImage::findOrFail($id);
        return view('menu.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'order' => 'required|integer',
        ]);

        $image = MenuImage::findOrFail($id);
        $image->title = $request->title;
        $image->order = $request->order;

        try {
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/images/full_menu');
                $image->image_path = $imagePath;
            }

            $image->save();

            Log::info('Image updated successfully', ['title' => $image->title]);

            return redirect()->route('menu')->with('success', 'Image updated successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to update image', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to update image.');
        }
    }

    public function destroy($id)
    {
        $image = MenuImage::findOrFail($id);

        try {
            $image->delete();
            Log::info('Image deleted successfully', ['title' => $image->title]);
            return redirect()->route('menu')->with('success', 'Image deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to delete image', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to delete image.');
        }
    }
}
