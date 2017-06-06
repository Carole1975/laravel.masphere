<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('family', ['annonces'=>$annonces]);
    }

    /**
     * Show the application search.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $debut = date('Y-m-d H:i:s', strtotime($request->debut_annee.'-'.$request->debut_mois.'-'.$request->debut_jour));
        if ($request->has('debut_annee') && $request->has('debut_mois') && $request->has('debut_jour')) {
            $dispos = Dispo::all()->where('debut_dispo', '=', $debut);
            // ->where('debut_dispo', '=', $request->disposearch);
        } else {
            $dispos = Dispo::all();
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
        // dd($annonce);
    }
}
