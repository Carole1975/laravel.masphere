<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProController extends Controller
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
        // return view('pro');
        if (Auth::User()->profile=='2') {
            return view('pro');
        } else {
            return Redirect()->route('family');
        }
    }
    public function search()
    {
        // return view('pro');
        if (Auth::User()->profile=='2') {
            return view('prosearch');
        } else {
            return Redirect()->route('family');
        }
    }
    public function dispoform()
    {
        // return view('pro');
        if (Auth::User()->profile=='2') {
            return view('dispoform');
        } else {
            return Redirect()->route('family');
        }
    }
}
