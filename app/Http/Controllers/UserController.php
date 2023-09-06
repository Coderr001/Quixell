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
        return redirect()->route('home');
    }

    public function register(){
        return view('pages.register');
    }

    public function login(){
        return view('pages.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function profile($id) {
    
        $user = User::find($id);
    
        if (!$user) {
            // Handle jika user tidak ditemukan
            return abort(404);
        }
    
        return view('pages.profile', compact('user'));
    
    }
    
    public function index(){

        return view('profile');
    }

    public function edit(){

        return view('pages.edit-profile');
    }

    public function editProfile() {
        $user = Auth::user();
    
        if (!$user) {
            return abort(401);
        }
    
        return view('pages.profile', compact('user'));
    }
    public function updateProfile(User $user, Request $request) {
        
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'gender' => ['required', new GenderRule],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();
        
        // handle image upload
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        // update user
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        if($request->hasFile('image')){
            $user->image = $imageName;
        }
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();
        
        
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
    
    
    

}
