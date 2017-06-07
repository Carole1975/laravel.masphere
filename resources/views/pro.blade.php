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


<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vous avez choisi</div>
                @foreach ($annonces as $annonce)
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{ $annonce->debut }}</h3>
                            <p>statut de l'annonce</p>
                            <p class="card-text">Pendant : {{ $annonce->duree }}h</p><p> {{ $annonce->nbrEnfant }} Enfant(s)</p>
                            <div class="acceptornot">
                                <a href="/pro/annonces/unchoose/{{ $annonce->id }}" class="btn btn-primary choisir" name="choisir" id="choisir"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    se désister</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="panel-heading">Vous avez été choisi</div>
                @foreach ($dispos as $dispo)
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{ $dispo->debut }}</h3>
                            <p>statut : en attente de confirmation de la famille</p>
                            <p class="card-text">Pendant : {{ $dispo->duree }}h</p>
                            <p> {{ $dispo->nbrEnfant }} Enfant(s)</p>
                            <div class="acceptornot">
                                @if($dispo->statut == 1)
                                    <a href="/statut/dispo/post2/{{ $dispo->id }}" class="btn btn-primary choisir" name="choisir" id="choisir"> <i class="fa fa-circle-o" aria-hidden="true"></i> accepter</a>
                                @elseif($dispo->statut == 2)
                                    <a href="/statut/dispo/depost2/{{ $dispo->id }}" class="btn btn-primary choisir" name="annuler" id="annuler"> <i class="fa fa-check-circle-o" aria-hidden="true"></i> annuler</a>
                                    <a href="#" class="btn btn-primary choisir" name="annuler" id="annuler">n° de la famille</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
