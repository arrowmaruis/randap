<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin():View{
        return view('auth.signin');
    }
    public function signup():View{
        return view('auth.signup');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
    
}
