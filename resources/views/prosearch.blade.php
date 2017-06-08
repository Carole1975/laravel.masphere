@extends('layouts.app')

@section('content')

<div class="container-bottom">
    <div class="search-button selected">
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
                <div class="panel-heading">Toutes les annonces disponibles</div>
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Filtres</h3>

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('prosearchpost') }}">
                            {{ csrf_field() }}
                        <div class="container_form">

                            <div class="col-md-4 form_search_pro_section form-group{{ $errors->has('filtreNbEnfant') ? ' has-error' : '' }}">
                                <label for="filtreNbEnfant" class="control-label">Nombre Enfant Max</label>

                                <div class="input">
                                    <input class="rechercheinput" id="filtreNbEnfant" class="form-control" type="text" name="filtreNbEnfant" value="{{ old('filtreNbEnfant') }}">

                                </div>
                            </div>

                            <div class="form_search_pro_section col-md-4 form-group{{ $errors->has('filtreDureeMini') ? ' has-error' : '' }}">
                                <label for="filtreDureeMini" class="control-label">Durée Minimale</label>

                                <div class="input">
                                    <input class="rechercheinput" id="filtreDureeMini" type="text" name="filtreDureeMini" value="{{ old('filtreDureeMini') }}">
                                </div>
                            </div>

                            <div class="form_search_pro_section col-md-4 form-group{{ $errors->has('filtreDureeMax') ? ' has-error' : '' }}">
                                <label for="filtreDureeMax" class="control-label">Durée Maximale</label>
                                <div class="input">
                                    <input class="rechercheinput" id="filtreDureeMax" type="text" name="filtreDureeMax" value="{{ old('filtreDureeMax') }}">
                                </div>
                        </div>

                            </div>
                            <button type="submit" class="btn btn-primary attent">Mettre à jour vos critères de recherche</button>
                        </div>
                    </form>

                </div>
                <div class="panel-heading"></div>
                @if (count($annonces) === 0)
                <p class = 'messages'>Aucune annonce ne correspond à vos critères</p>
                @else
                <p class = 'messages'>{{ count($annonces) }} annonce(s) correspond(ent) à vos critères</p>
                @endif
                @foreach ($annonces as $annonce)
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">{{ $annonce->debut }}</h3>
                        <p class="card-text">Pendant : {{ $annonce->duree }}h</p><p> {{ $annonce->nbrEnfant }} Enfant(s)</p>
                        <div class="acceptornot">
                            <a href="/pro/annonces/choose/{{ $annonce->id }}" class="btn btn-primary" name="choisir" id="choisir">Choisir</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>


    @endsection
