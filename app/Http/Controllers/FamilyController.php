<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dispo;
class FamilyController extends Controller
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
    public function home(Request $request)
    {
       $annonces = $request->user()->annonces;
       return view('family', ['annonces'=>$annonces]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $dispos = Dispo::all();
        return view('familysearch', compact('dispos'));
    }
}
