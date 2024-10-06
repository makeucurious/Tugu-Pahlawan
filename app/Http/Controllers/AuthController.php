<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->post(), [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('login')->withErrors($validator)->withInput();
        }
    
        if(auth()->attempt($validator->validated())){
            return redirect()->route('plan');
        }
    
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function formRegister(){
        return view('register');
    }

    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validate['role_id'] = 2;

        $user = User::create($validate);

        return redirect()->route('login')->with('success', 'Account created successfully');
    }
}
