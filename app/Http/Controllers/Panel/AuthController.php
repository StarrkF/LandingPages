<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\LoginRequest;
use App\Http\Requests\Panel\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // dd($request->validated());
        $user=User::create($request->validated());
        Auth::login($user);
        return redirect()->route('admin.home');
    }

    public function login(LoginRequest $request)
    {  
        
        return Auth::attempt($request->validated()) ? redirect()->route('admin.home') : back()->withErrors('Wrong Email or Password');
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('get.login');
    }

}
