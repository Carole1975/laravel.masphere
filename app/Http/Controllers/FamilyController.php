<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Dispo;
use App\Annonce;

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
        $dispos = $request->user()->dispos;
        return view('family', ['annonces'=>$annonces, 'dispos'=>$dispos]);
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
        $debut = date('Y-m-d', strtotime($request->debut_annee.'-'.$request->debut_mois.'-'.$request->debut_jour));
        if ($request->has('debut_annee') && $request->has('debut_mois') && $request->has('debut_jour')) {
            $dispos = Dispo::all()->where('debut_dispo', '=', $debut.' 00:00:00')->where('statut', '=', 0);
            // ->where('debut_dispo', '=', $request->disposearch);
        } else {
            $dispos = Dispo::all()->where('statut', '=', 0);
        }
        return view('familysearch', ['dispos'=>$dispos, 'debut'=>$debut]);
    }

    public function getAnnonceToUpdate(Request $request, $id)
    {
        $annonce = Annonce::findOrfail($id);
        return view('familyUpdateAnnonce', ['annonce'=>$annonce]);
    }

    public function updateAnnonce(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->debut = $request->input('annonceDebut');
        $annonce->duree = $request->input('annonceDuree');
        $annonce->nbrEnfant = $request->input('annonceNbrEnfant');
        $annonce->update();
        return redirect()->route('family');
    }
}
