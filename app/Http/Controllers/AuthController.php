<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function adhesionForm():View
    {
        
        return view('auth.adhesion');

    }

    public  function PassReset():View{
        return view('auth.password-reset');

    }

    public function  PasswordReset($token)
    {
        $email = DB::table('password_reset_tokens')->where('token', $token)->first()->email;

        return view('auth.reset-password-token',[
            'email' => $email
        ]);
    }
    
    
}
