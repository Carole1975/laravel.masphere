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
                    You are logged in as Family!
                </div>
                <div>

                    <div>
                        <form class="form-horizontal" role="form" method="POST" action="/updateAnnonce/{{ $annonce->id }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('annonceDebut') ? ' has-error' : '' }}">
                                <label for="annonceDebut" class="col-md-4 control-label">Date et heure (YYYY-mm-dd HH:ii:ss)</label>

                                <div class="col-md-6">
                                    <input id="annonceDebut" type="text" class="form-control" name="annonceDebut" value="{{ $annonce->debut }}" required autofocus>

                                    @if ($errors->has('annonceDebut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('annonceDebut') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('annonceDuree') ? ' has-error' : '' }}">
                                <label for="annonceDuree" class="col-md-4 control-label">Durée</label>

                                <div class="col-md-6">
                                    <input id="annonceDuree" type="text" class="form-control" name="annonceDuree" value="{{ $annonce->duree }}" required autofocus>

                                    @if ($errors->has('annonceDuree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('annonceDuree') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('annonceNbrEnfant') ? ' has-error' : '' }}">
                                <label for="annonceNbrEnfant" class="col-md-4 control-label">Nombre d'enfant</label>

                                <div class="col-md-6">
                                    <input id="annonceNbrEnfant" type="text" class="form-control" name="annonceNbrEnfant" value="{{ $annonce->nbrEnfant }}" required autofocus>

                                    @if ($errors->has('annonceNbrEnfant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('annonceNbrEnfant') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Mettre à jour mon annonce
                            </button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
