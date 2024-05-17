<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ActivityController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index():View{
        return view('activity.activity');
    }

     /**
     * Display a listing of the resource.
     */
    public function projet():View{
        return view('activity.projet');
    }

}
