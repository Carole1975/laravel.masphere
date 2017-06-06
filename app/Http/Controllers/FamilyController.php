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
     * Show the application search.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->flash();
        $debut_annee = $request->input('debut_annee');
        $debut_mois = $request->input('debut_mois');
        $debut_jour = $request->input('debut_jour');
        $debut = date('Y-m-d',strtotime($request->debut_annee.'-'.$request->debut_mois.'-'.$request->debut_jour));
        if($request->has('debut_annee') && $request->has('debut_mois') && $request->has('debut_jour')){
            $dispos = Dispo::all()->where('debut_dispo','=',$debut.' 00:00:00');
            // ->where('debut_dispo', '=', $request->disposearch);
        }else{
            $dispos = Dispo::all();
        }
        return view('familysearch', ['dispos'=>$dispos, 'debut'=>$debut]);
    }
}