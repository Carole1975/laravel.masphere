<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function testAnnonces(){
    	// lire les users
    	$annonces = App\Annonce::all();
		var_dump($annonces);

    	// récupérer un user
    	$annonces = App\Annonce::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
        var_dump($annonces);
    	
    }
}
