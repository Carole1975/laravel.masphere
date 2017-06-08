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
    public function index(Request $request)
    {

        // $annonces = $request->user()->annonces;
        // return view('pro', ['annonces'=>$annonces]);

        // a modifier pour arfficher les annoces sur lesquelles il s'est placer (puisque la ce serai les annoces de l'utilisateur connecter, qui dans ce cas est un pro et n'as pas d'annoces)
        $annonces = $request->user()->annonces;

        // affichage des dispos qui ont étés choisies par une/des famille(s)
        $dispos = $request->user()->dispos->where('statut', '>', 0);
        return view('pro', ['annonces'=>$annonces, 'dispos'=>$dispos]);
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
        $dispo->debut_dispo = Carbon::createFromFormat('Y-m-d', $request->input('datedebut'))->format('Y-m-d').' 00:00:00';
        $dispo->debut_heure = $request->input('heure');
        $dispo->duree = $request->input('dureeheure');
        $dispo->commentaire = $request->input('commentaire');
        $dispo->capacitegarde_max = $request->input('enfants');
        Auth::user()->dispos()->save($dispo);
        return redirect()->route('dispoform');
    }

    public function getDispoToUpdate(Request $request, $id)
    {
        $disponibilite = Dispo::findOrfail($id);
        $date = $disponibilite->debut_dispo;
        return view('proUpdateDispo', ['disponibilite'=>$disponibilite, 'debut_date'=>$date]);
    }

    public function updateDispo(Request $request, $id)
    {
        $dispos = Dispo::findOrFail($id);
        $dispos->debut_dispo = $request->input('datedebut');
        $dispos->debut_heure = $request->input('heure');
        $dispos->duree = $request->input('dureeheure');
        $dispos->commentaire = $request->input('commentaire');
        $dispos->capacitegarde_max = $request->input('enfants');
        $dispos->update();
        return redirect()->route('dispoform');
    }
}
