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
    public function index(Request $request)
    {

        $annonces = $request->user()->annonces;
        return view('pro', ['annonces'=>$annonces]);
    }

    public function search(Request $request)
    {

        $request->flash();
        $filtreNbEnfant = $request->input('filtreNbEnfant');
        $filtreDureeMini = $request->input('filtreDureeMini');
        $filtreDureeMax = $request->input('filtreDureeMax');
        $annonces = \App\Annonce::all();
        if (!is_null($filtreNbEnfant)) {
            $annonces = $annonces->where('nbrEnfant', '<=', $filtreNbEnfant);
        }
        if (!is_null($filtreDureeMini)) {
            $annonces = $annonces->where('duree', '>=', $filtreDureeMini);
        }
        if (!is_null($filtreDureeMax)) {
            $annonces = $annonces->where('duree', '<=', $filtreDureeMax);
        }
        //$annonces = $request->user()->annonces;
        return view('prosearch', ['annonces'=>$annonces]);
    }
    public function chooseAnnonce(Request $request, $id)
    {
        //$request->user()->annonces()->sync([$id]);
        $request->user()->annonces()->attach($id);
        return redirect()->route('pro');
    }

    public function unchooseAnnonce(Request $request, $id)
    {
        //$request->user()->annonces()->sync([$id]);
        $request->user()->annonces()->detach($id);
        return redirect()->route('pro');
    }
}
