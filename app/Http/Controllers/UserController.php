<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // Index method to list all users
    public function index()
    {
        Log::info('Fetching all users');
        $users = User::all();

        return view('user.index', compact('users'));
    }

    // Show the form to create a new user
    public function create()
    {
        return view('user.create');
    }

    // Show the form to edit an existing user
    public function edit($id)
    {
        $user = User::find($id);
        Log::info('Editing user', ['user_id' => $id]);
        return view('user.edit', compact('user'));
    }

    // Store a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Log::info('Creating new user', ['name' => $request->name, 'email' => $request->email]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user')
            ->with('success', 'User created successfully.');
    }

    // Update an existing user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        Log::info('Updating user', ['user_id' => $id]);

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('user')
            ->with('success', 'User updated successfully.');
    }

    // Delete an existing user
    public function destroy($id)
    {
        Log::info('Deleting user', ['user_id' => $id]);

        $user = User::find($id);
        $user->delete();

        return redirect()->route('user')
            ->with('success', 'User deleted successfully.');
    }
}
