<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Annonce;

class AnnonceController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
  /*$this->middleware(function ($request, $next) {
    if(false === Auth::user()->isFamille()){
      return redirect()->route(Auth::user()->getHomePageRoute());
    }
    return $next($request);
});*/
}

public function createAnnonce(Request $request){
	$annonce = new Annonce;
	$annonce->debut = $request->input('annonceDebut');
	$annonce->duree = $request->input('annonceDuree');
	$annonce->nbrEnfant = $request->input('annonceNbrEnfant');
	$annonce->gardeChezFamille = 1;
	$user = $request->user();
	$user->annonces()->save($annonce);
	return redirect()->route('family');
}
}
