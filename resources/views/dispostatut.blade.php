@extends('layouts.app')

@section('content')
<div class="container-bottom">
    <div class="search-button">
        <!--<p>Chercher</p>-->
        <a href="/family/search">
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
                <div class="panel-heading">Dashboard Family</div>

                <div class="panel-body">
                    Confirmer ?
                </div> 
                <div>
                    <h2>le pro</h2>
                    <ul>
                        @foreach ($dispos as $dispo)
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">le {{ date('Y-m-d',strtotime($dispo->debut_dispo)) }} à {{ $dispo->debut_heure }}</h3>
                                <p class="card-text">pour {{ $dispo->capacitegarde_max }} enfant(s) max, pendant {{ $dispo->duree }}h.<br /> {{ $dispo->commentaire }}</p>
                                <a class="btn btn-primary" href='/statut/dispo/post/{{ $dispo->id }}'>confirmer</a>
                            </div>
                        </div>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
