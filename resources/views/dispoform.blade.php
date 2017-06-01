@extends('layouts.app')

@section('content')
<div class="container-bottom">
    <div class="search-button">
        <!--<p>Chercher</p>-->
        <a href="/pro/search">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="dashboard-button">
        <a href="/pro">Dashboard</a>
    </div>
</div>

<div class="container prosearch">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Toutes les annonces disponibles</div>
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Filtres</h3>

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('createDispo') }}">
                        {{ csrf_field() }}

                            <div class="form-group" id="datedebut">
                                <label for="" class="col-md-4 control-label">Date</label>
                                <div class="col-md-10 col-md-offset-1 input">
                                    <input class="rechercheinput" id="datedebut" type="date" name="datedebut" value="2017-02-20">
                                </div>
                            </div>

                            <div class="form-group" id="heure">
                                <label for="" class="col-md-4 control-label">Heure</label>
                                <div class="col-md-10 col-md-offset-1 input">
                                    <input class="rechercheinput" id="heure" type="time" name="heure" value="20:20">
                                </div>
                            </div>

                            <div class="form-group" id="dureeheure">
                                <label for="" class="col-md-4 control-label">Durée en heure</label>
                                <!--<div class="col-md-10 col-md-offset-1 input">
                                    <input class="rechercheinput" id="dureeheure" type="time" name="dureeheure" value="20:20">
                                </div>-->
                                <div class="col-md-10 col-md-offset-1">
                                    <select name="dureeheure" id="" class="form-control col-md-12">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="nbrmax_enfants">
                                <label for="" class="col-md-4 control-label" style="">Nombre Enfant Max</label>
                                <div class="col-md-10 col-md-offset-1">
                                    <select name="enfants" id="" class="form-control col-md-12">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="commentaire">
                                <label for="" class="col-md-4 control-label">Commentaire</label>
                                <div class="col-md-10 col-md-offset-1 input">
                                    <textarea rows="" cols="" type="text" id="commentaire" name="commentaire" class="col-md-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus rerum iste beatae, commodi corrupti cumque, magnam voluptatum voluptates atque, dolor culpa. Quis explicabo dolores saepe.</textarea>
                                    <!--<input class="rechercheinput" id="dureeheure" type="text" name="dureeheure">-->
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary attent">Mettre à jour vos critères de recherche</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
