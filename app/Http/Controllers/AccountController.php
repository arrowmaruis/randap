<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AccountController extends Controller
{
    public function chat():View{
        return view('account.chat');
    }
}
