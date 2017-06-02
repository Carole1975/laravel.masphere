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

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('prosearchpost') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('filtreNbEnfant') ? ' has-error' : '' }}">
                                <label for="filtreNbEnfant" class="col-md-4 control-label">Nombre Enfant Max</label>

                                <div class="col-md-1 input">
                                    <input class="rechercheinput" id="filtreNbEnfant" class="form-control" type="text" name="filtreNbEnfant" value="{{ old('filtreNbEnfant') }}">

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('filtreDureeMini') ? ' has-error' : '' }}">
                                <label for="filtreDureeMini" class="col-md-4 control-label">Durée Minimale</label>

                                <div class="col-md-1 input">
                                    <input class="rechercheinput" id="filtreDureeMini" type="text" name="filtreDureeMini" value="{{ old('filtreDureeMini') }}">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('filtreDureeMax') ? ' has-error' : '' }}">
                                <label for="filtreDureeMax" class="col-md-4 control-label">Durée Maximale</label>

                                <div class="col-md-1 input">
                                    <input class="rechercheinput" id="filtreDureeMax" type="text" name="filtreDureeMax" value="{{ old('filtreDureeMax') }}">
                                </div>
                            </div>





                        <!--<p class="card-text">Adresse :    | A partir de :        | Pendant :       . |</p>
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i>
                            Plus d'informations</p>-->
                            <button type="submit" class="btn btn-primary attent">Mettre à jour vos critères de recherche</button>
                        </div>
                    </form>

                </div>
                <div class="panel-heading">Résultats de votre recherche</div>
                @if (count($annonces) === 0)
                <p class = 'messages'>Aucune annonce ne correspond à vos critères</p>
                @else
                <p class = 'messages'>{{ count($annonces) }} annonces correspondent à vos critères</p>
                @endif
                @foreach ($annonces as $annonce)
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">{{ $annonce->debut }}</h3>
                        <p class="card-text">Pendant : {{ $annonce->duree }}h</p><p> {{ $annonce->nbrEnfant }} Enfant(s)</p>
                        <div class="acceptornot">
                            <a href="/pro/annonces/choose/{{ $annonce->id }}" class="btn btn-primary choisir" name="choisir" id="choisir"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                Choisir</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    @endsection
