<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class APILoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
        
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = auth()->user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'data' => $user,
            ]);
        }
        
        return response()->json([
            'message' => 'Invalid credentials',
            'data' => null,
        ], 401);
    }
}
