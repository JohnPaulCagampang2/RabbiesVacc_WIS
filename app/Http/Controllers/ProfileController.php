<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the authenticated user's profile
     */
    public function index()
    {
        // Get the currently logged-in user
        $user = Auth::user();
        
        // Return profile view with user data
        return view('profile', compact('user'));
    }

    /**
     * Update the user's profile
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'nullable|string',
            'experience_level' => 'nullable|string',
            'favorite_artists' => 'nullable|string',
            'favorite_genre' => 'nullable|string',
            'equipment' => 'nullable|string',
            'music_mood' => 'nullable|string',
            'location' => 'nullable|string',
            'available_for_collaboration' => 'boolean',
            'tags' => 'nullable|string',
        ]);
        
        // Update user profile
        $user->update($validated);
        
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}