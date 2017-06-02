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
    <div class="dispo-page">
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
                <div class="panel-heading">Toutes la annonces disponibles</div>
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Filtres</h3>


                            <input class="rechercheinput" type="" name="" value="">
                            <p class="card-text">Adresse :    | A partir de :        | Pendant :       . |</p>
                            <p><i class="fa fa-info-circle" aria-hidden="true"></i>
    Plus d'informations</p>
                            <p class="btn btn-primary attent">Mettre à jour vos critères de recherche</p>
                        </div>
                    </div>
                <div class="panel-heading">Résultats de votre recherche
                </div>
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Garde du 12 juin</h3>
                            <p class="card-text">Adresse : | A partir de : | Pendant : |</p>
                            <div class="acceptornot">
                                <a href="#" class="btn btn-primary choisir" name="choisir" id="choisir"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    Choisir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
