<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }
    public function login(StorePost $request){
        // validation

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials, $request->has('remember-me'))){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided cridentials do not match database'
        ]);
    }
}

