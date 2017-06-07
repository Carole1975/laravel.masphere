@extends('layouts.app')

@section('content')
<div class="container-bottom">
    <div class="search-button">
        <a class="linkmenu" href="/pro/search">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Rechercher</p>
        </a>
    </div>
    <div class="dashboard-button">
        <a class="linkmenu" href="/pro">
            <i class="fa fa-list fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Mon dashboard</p>
        </a>
    </div>
    <div class="dispo-page selected">
        <a class="linkmenu" href="/pro/dispo">
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Mes disponibilités</p>
        </a>
    </div>
</div>


<div class="container prosearch">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une disponibilité</div>
                <div class="card">
                    <div class="card-block">


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
                                <div class="input col-md-12">
                                    <textarea type="text" id="commentaire" name="commentaire" class="col-md-12"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary attent">Mettre à jour mes disponibilités</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container prodispos">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Récapitulatif de mes disponibilités
                </div>
                @foreach ($disponibilites as $disponibilite)
                    <div class="card">
                    <a href="/pro/dispo/update/{{ $disponibilite->id }}">Modifier</a>
                        <div class="card-block" date-id="{{ $disponibilite->id }}">
                            <h3 class="card-title">{{ $disponibilite->debut_dispo }}</h3>
                            <p class="card-text">À {{ $disponibilite->debut_heure }}, pendant {{ $disponibilite->duree }} heure(s) pour {{ $disponibilite->capacitegarde_max }} enfant(s).</p>
                            <p class="card-text CommentsDispos" id="CommentsDispos">Commentaires : {{ $disponibilite->commentaire }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>






@endsection
