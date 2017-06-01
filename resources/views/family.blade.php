@extends('layouts.app')

@section('content')
<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Family</div>

                <div class="panel-body">
                    You are logged in as Family!
                </div> 
                <div>
                    <h2>Mes annonces</h2>    
                    @foreach ($annonces as $annonce)
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{ $annonce->debut }}</h3>
                            <p class="card-text">Pendant : {{ $annonce->duree }}h</p><p> {{ $annonce->nbrEnfant }} Enfant(s)</p>
                        </div>
                    </div>
                    @endforeach

                    <div>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('createAnnonce') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('annonceDebut') ? ' has-error' : '' }}">
                                <label for="annonceDebut" class="col-md-4 control-label">Date et heure (YYYY-mm-dd HH:ii:ss)</label>

                                <div class="col-md-6">
                                    <input id="annonceDebut" type="text" class="form-control" name="annonceDebut" value="{{ old('annonceDebut') }}" required autofocus>

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
                                    <input id="annonceDuree" type="text" class="form-control" name="annonceDuree" value="{{ old('annonceDuree') }}" required autofocus>

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
                                    <input id="annonceNbrEnfant" type="text" class="form-control" name="annonceNbrEnfant" value="{{ old('annonceNbrEnfant') }}" required autofocus>

                                    @if ($errors->has('annonceNbrEnfant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('annonceNbrEnfant') }}</strong>
                                    </span>
                                    @endif
                                </div> 
                            </div>

                            <button type="submit" class="btn btn-primary">
                                nouvelle annonce
                            </button>




                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
