<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Dispo;
use Carbon\Carbon;

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
        return view('pro');
        // if (Auth::User()->profile=='2') {
        //     return view('pro');
        // } else {
        //     return Redirect()->route('family');
        // }
    }
    public function search()
    {
        return view('prosearch');
        // if (Auth::User()->profile=='2') {
        //     return view('prosearch');
        // } else {
        //     return Redirect()->route('family');
        // }
    }
    public function dispoform(Request $request)
    {
        $disponibilites = $request->user()->dispos;
        return view('dispoform', ['disponibilites'=>$disponibilites]);
    }

    public function createDispo(Request $request)
    {
        Carbon::setLocale('fr');

        $dispo = new Dispo;
        // $dispo->debut_dispo = Carbon::createFromFormat('Y-m-d', $request->input('datedebut'))->format('d-m-Y');
        $dispo->debut_dispo = Carbon::createFromFormat('Y-m-d', $request->input('datedebut'));
        $dispo->debut_heure = $request->input('heure');
        $dispo->duree = $request->input('dureeheure');
        $dispo->commentaire = $request->input('commentaire');
        $dispo->capacitegarde_max = $request->input('enfants');
        Auth::user()->dispos()->save($dispo);
        echo 'merci gena';
    }
}
