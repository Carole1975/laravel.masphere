<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;

class TestController extends Controller
{
    public function testAnnonces(){
    	// lire les users
    	$annonces = Annonce::all();
		var_dump($annonces);

    	// récupérer un user
    	/*$annonces = App\Annonce::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
        var_dump($annonces);*/
    }
}
