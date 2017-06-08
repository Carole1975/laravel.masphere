@extends('layouts.app')

@section('content')
{{-- <div class="container-bottom">
    <div class="search-button">
        <!--<p>Chercher</p>-->
        <a href="/family/search">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="dashboard-button">
        <a href="/pro">Dashboard</a>
    </div>
</div> --}}


<div class="container-bottom">
    <div class="search-button">
        <a class="linkmenu" href="/family/search">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Rechercher</p>
        </a>
    </div>
    <div class="dashboard-button selected">
        <a class="linkmenu" href="/family">
            <i class="fa fa-list fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Mon dashboard</p>
        </a>
    </div>
    <div class="dispo-page">
        <a class="linkmenu" href="/family/annonce">
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Mes annonces</p>
        </a>
    </div>
</div>



<div class="container prosearch">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">J'ai été choisi par un pro</div>
                    @foreach ($annonces as $annonce)
                        @if($annonce->statut > 0)
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title">{{ $annonce->debut }}</h3>
                                    <p class="card-text">Pendant : {{ $annonce->duree }}h</p>
                                    @if($annonce->statut == 1)
                                    <p> {{ $annonce->nbrEnfant }} Enfant(s)</p>
                                        <a href="/statut/annonce/depost2/{{ $annonce->id }}" class="btn btn-primary refuse" name="annuler" id="annuler"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> annuler</a>
                                        <a href="/statut/annonce/post2/{{ $annonce->id }}" class="btn btn-primary choisir" name="valider" id="valider">valider le pro(en fonction du profil)</a>
                                        @endif
                                    @if($annonce->statut == 2)
                                        <a href="#" class="btn btn-primary" style="background:transparent; color:green" name="numdupro" id="numdupro">n° du pro</a>
                                    @endif
                                </div>
                            </div>
                            @endif
                    @endforeach
            </div>
        </div>
    </div>
</div>


<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading">Les dispos de pro que j'ai choisies</div>
                        @foreach ($dispos as $dispo)
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">le {{ date('Y-m-d',strtotime($dispo->debut_dispo)) }} à {{ $dispo->debut_heure }}</h3>
                                <p class="card-text">pour {{ $dispo->capacitegarde_max }} enfant(s) max, pendant {{ $dispo->duree }}h.<br /> {{ $dispo->commentaire }}</p>
                                @if($dispo->statut == 0 || $dispo->statut == NULL)
                                <a class="btn btn-primary" href='/statut/dispo/post1/{{ $dispo->id }}'>prendre la dispo</a>
                                @elseif($dispo->statut == 1)
                                <a class="btn btn-primary" href='/statut/dispo/depost1/{{ $dispo->id }}'>annullllleeeerrrr</a>
                                @elseif($dispo->statut == 2)
                                <a class="btn btn-primary" style="background:transparent; color:green" href='#'>n° du pro</a>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
    @endsection
