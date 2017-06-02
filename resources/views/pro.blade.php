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
<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vous avez choisi</div>


                @foreach ($annonces as $annonce)
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">{{ $annonce->debut }}</h3>
                        <p>statut : en attente de confirmation de la famille</p>
                        <p class="card-text">Pendant : {{ $annonce->duree }}h</p><p> {{ $annonce->nbrEnfant }} Enfant(s)</p>
                        <div class="acceptornot">
                            <a href="/pro/annonces/unchoose/{{ $annonce->id }}" class="btn btn-primary choisir" name="choisir" id="choisir"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                se désister</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="panel-heading">Une famille vous a choisi</div>
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Demande de garde</h3>
                            <p class="card-text">Le 10 juin 2017 à partir de 21h pendant 3 heures.</p>
                            <div class="acceptornot">
                                <a href="#" class="btn btn-primary accept" name="accepter" id="accepter"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    Confirmer</a>
                                    <a href="#" class="btn btn-primary refuse" name="refuser" id="refuser"><i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        Refuser</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title">Demande de garde</h3>
                                    <p class="card-text">Le 10 juin 2017 à partir de 21h pendant 3 heures.</p>
                                    <div class="acceptornot">
                                        <a href="#" class="btn btn-primary accept" name="accepter" id="accepter"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                            Confirmer</a>
                                            <a href="#" class="btn btn-primary refuse" name="refuser" id="refuser"><i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                Refuser</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-block">
                                            <h3 class="card-title">Demande de garde</h3>
                                            <p class="card-text">Le 10 juin 2017 à partir de 21h pendant 3 heures.</p>
                                            <div class="acceptornot">
                                                <a href="#" class="btn btn-primary accept" name="accepter" id="accepter"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                                    Confirmer</a>
                                                    <a href="#" class="btn btn-primary refuse" name="refuser" id="refuser"><i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                        Refuser</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-block">
                                                    <h3 class="card-title">Demande de garde</h3>
                                                    <p class="card-text">Le 10 juin 2017 à partir de 21h pendant 3 heures.</p>
                                                    <div class="acceptornot">
                                                        <a href="#" class="btn btn-primary accept" name="accepter" id="accepter"> <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                                            Confirmer</a>
                                                            <a href="#" class="btn btn-primary refuse" name="refuser" id="refuser"><i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                                Refuser</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endsection
