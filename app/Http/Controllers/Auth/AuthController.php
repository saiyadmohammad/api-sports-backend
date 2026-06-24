<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $userData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password'=> 'required|string|min:8'
        ]);

        $user = User::create([
            'name'=> $userData['name'],
            'email'=> $userData['email'],
            'password'=> Hash::make($userData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token'=> $token,
            'user' => $user,
        ], 201);
    }

    public function login(Request $request){
        $userData = $request->validate([
            'email'=> 'required|string|email',
            'password'=> 'required'
        ]);

        $user = User::where('email', $userData['email'])->first();

        if(!$user || !Hash::check($userData['password'], $user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message'=> 'Successfully logged out']);
    }
}


// public function login(Request $request){
    //     if(!Auth::attempt($request->only('email','password'))){
    //         return response()->json(['message' => 'Invalid credentials'], 401);
    //     }

    //     $user = User::where('email', $request['email'])->first();
    //     $token = $user->createToken('auth_token')->plainTextToken;

    //     return response()->json([
    //         'token' => $token,
    //         'token_type' => 'Bearer',
    //     ]);
    // }

    // <?php
    //     $test = explode(".","");
    //     var_dump($test);
    //     $test_2 = base64_decode("");
    //     echo $test_2;
