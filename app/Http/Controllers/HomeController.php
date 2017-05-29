<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('welcome');
    }

    //     if (Auth::User()->name=='famille1') {
    //         return Redirect()->route('family');
    //     } elseif (Auth::User()->name=='pro1') {
    //         return Redirect()->route('pro');
    //     } else {
    //         return view('welcome');
    //     }
    // }
}
