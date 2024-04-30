<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function signin():View{
        return view('auth.signin');
    }
    public function signup():View{
        return view('auth.signup');
    }
    
}
