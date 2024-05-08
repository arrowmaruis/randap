<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AccountController extends Controller
{
    public function chat():View{
        return view('account.chat');
    }
    public function yearbook():View{
        return view('account.yearbook');
    }
    public function account():View{
        return view('account.index');
    }

    public function userProfile():View{
        
        return view('account.user-profile');
    }
    
}
