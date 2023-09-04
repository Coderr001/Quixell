<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\GenderRule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // function to create user
    public function store(Request $request){

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'gender' => ['required', new GenderRule]
        ]);
        
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'password' => $request->password
        ]);
        auth()->login($user);
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);
    }

    public function register(){
        return view('user.register');
    }

    public function login(){
        return view('user.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

}