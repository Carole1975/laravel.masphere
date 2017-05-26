<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Annonce;
use App\User;

class TestController extends Controller
{
    public function testAnnonces(){
    	// lire les users
    	$annonces = Annonce::all();
    	foreach ($annonces as $key => $annonce) {
    		var_dump($annonce->text);
    	}
		

    	//récupérer les annonce d'un user
    	/*$annonces = App\Annonce::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
        var_dump($annonces);*/
    }

    public function testUsers(){
    	
    	// lire tous les users
		echo "<b>Lire tous les users :<br/></b>";
    	$users = User::all();
    	foreach ($users as $key => $user) {
    		echo $user->name." / ".$user->email."<br/>";
    	}

    	//récupérer le user famille1
    	echo "<b><br/>Récupérer le user dont le nom est famille1 :<br/></b>";
    	$users = User::where('name', '=', 'famille1')->get();
        foreach ($users as $key => $user) {
    		echo $user->name." / ".$user->email."<br/>";
    	}

        //récupérer les users dont le nom commence par famille
        echo "<b><br/>Récupérer les users dont le nom commence par famille :<br/></b>";
    	$users = User::where('name', 'like', 'famille%')->get();
        //var_dump($user);
        foreach ($users as $key => $user) {
    		echo $user->name." / ".$user->email."<br/>";
    	}
		
    }
}
