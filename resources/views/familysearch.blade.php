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
                    You are logged in as Family! and you'r searching
                </div> 
                <div>
                    <form class="form-horizontal" role="form" method="" action="{{ route('familysearch') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('debut_annee') ? ' has-error' : '' }}">
                            <label for="debut_annee" class="col-md-4 control-label">debut de disponibilité du pro </label>
                            <div class="col-md-2">
                            <input id="debut_annee" type="text" class="form-control" name="debut_annee" value="{{ old('debut_annee') }}" placeholder="aaaa">
                                @if ($errors->has('debut_annee'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('debut_annee') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-2">
                            <input id="debut_mois" type="text" class="form-control" name="debut_mois" value="{{ old('debut_mois') }}" placeholder="mm">
                                @if ($errors->has('debut_mois'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('debut_mois') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-2">
                            <input id="debut_jour" type="text" class="form-control" name="debut_jour" value="{{ old('debut_jour') }}" placeholder="jj">
                                @if ($errors->has('debut_jour'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('debut_jour') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                trouver un pro
                            </button>
                        </div>
                    </form>
                </div>
                <div>
                    <h2>les pros et tout</h2>
                    {{-- <h2>{{ $debut }}</h2> --}}
                    <ul>
                        @foreach ($dispos as $dispo)
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">le {{ date('Y-m-d',strtotime($dispo->debut_dispo)) }} à {{ $dispo->debut_heure }}</h3>
                                <p class="card-text">pour {{ $dispo->capacitegarde_max }} enfant(s) max, pendant {{ $dispo->duree }}h.<br /> {{ $dispo->commentaire }}</p>
                                <a class="btn btn-primary" href='/statut/dispo/confirm/{{ $dispo->id }}'>prendre la dispo</a>
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
