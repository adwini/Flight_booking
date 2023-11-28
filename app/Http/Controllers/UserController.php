<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Web\SearchFlightController;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the home page
        // return redirect()->route('/search');
            return redirect()->action([SearchFlightController::class]);

    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to the home page
             return redirect()->action([SearchFlightController::class]);
        }
        // If the login attempt fails, return an error message
        return back()->withErrors([
            'email' => 'Invalid Credentials',
            
        ]);
    }
}