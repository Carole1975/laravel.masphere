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
    public function choixDispoFamille(Request $request, $id)
    {
        // modif;
        $dispos = Dispo::all()->where('id', '=', $id)->first();
        $dispos->statut = 1;
        $dispos->save();
        $request->user()->dispos()->attach($id);
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect()->back();
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unChoixDispoFamille(Request $request, $id)
    {
        // modif;
        $dispos = Dispo::all()->where('id', '=', $id)->first();
        $dispos->statut = 0;
        $dispos->save();
        $request->user()->dispos()->detach($id);
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect()->back();
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validationDispoPro(Request $request, $id)
    {
        // modif;
        $dispos = Dispo::all()->where('id', '=', $id)->first();
        $dispos->statut = 2;
        $dispos->save();
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect()->back();
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deValidationDispoPro(Request $request, $id)
    {
        // modif;
        $dispos = Dispo::all()->where('id', '=', $id)->first();
        $dispos->statut = 1;
        $dispos->save();
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect()->back();
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function chooseAnnoncePro(Request $request, $id)
    {
        //$request->user()->annonces()->sync([$id]);
        $annonces = Annonce::all()->where('id', '=', $id)->first();
        $annonces->statut = 1;
        $annonces->save();
        $request->user()->annonces()->attach($id);
        return redirect()->route('pro');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unchooseAnnoncePro(Request $request, $id)
    {
        //$request->user()->annonces()->sync([$id]);
        $annonces = Annonce::all()->where('id', '=', $id)->first();
        $annonces->statut = 0;
        $annonces->save();
        $request->user()->annonces()->detach($id);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validationAnnonceFam(Request $request, $id)
    {
        // modif;
        $dispos = Annonce::all()->where('id', '=', $id)->first();
        $dispos->statut = 2;
        $dispos->save();
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect()->back();
        // return view('dispostatut', ['dispos'=>$dispos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deValidationAnnonceFam(Request $request, $id)
    {
        // modif;
        $annonces = Annonce::all()->where('id', '=', $id)->first();
        $annonces->statut = 0;
        $annonces->save();
        Session::flash('flash_message', 'OKAAAAAAYYYYYY');
        return redirect()->back();
        // return view('annoncestatut', ['annonces'=>$annonces]);
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
