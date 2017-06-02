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
                <div class="panel-heading">Vous avez choisi
                </div>
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">Garde du 8 juin</h3>
                            <p class="card-text">Adresse :    | A partir de :        | Pendant :       . |</p>
                            <p><i class="fa fa-info-circle" aria-hidden="true"></i>
    Plus d'informations</p>
                            <p class="btn btn-primary attent">En attente de confirmation</p>
                        </div>
                    </div>
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
