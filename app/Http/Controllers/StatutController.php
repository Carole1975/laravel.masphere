<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Session;
use Session;
use App\User;
use App\Dispo;
use App\Annonce;


class StatutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showChoosedDispo(Request $request, $id)
    {
        $disponibilites = $request->user()->dispos;
        return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function choixFamille(Request $request, $id)
    {
        // modif;
        $dispos = Dispo::all()->where('id', '=', $id)->first();
        $dispos->statut = 1;
        $dispos->save();
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect('/family/search');
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unChoixFamille(Request $request, $id)
    {
        // modif;
        $dispos = Dispo::all()->where('id', '=', $id)->first();
        $dispos->statut = NULL;
        $dispos->save();
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect('/family/search');
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
