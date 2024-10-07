<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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

    public function register(UserRequest $request){
        $validate = $request->validated();

        $validate['role_id'] = 2;

        $user = User::create($validate);

        if($user){   
            return redirect()->route('login')->with('success', 'Account created successfully');
        } else {
            return redirect()->route('register')->with('error', 'Something went wrong');
        }
    }
}
