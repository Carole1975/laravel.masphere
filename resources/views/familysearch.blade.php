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
    <div class="search-button selected">
        <a class="linkmenu" href="/family/search">
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Rechercher</p>
        </a>
    </div>
    <div class="dashboard-button">
        <a class="linkmenu" href="/family">
            <i class="fa fa-list fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Mon dashboard</p>
        </a>
    </div>
    <div class="dispo-page">
        <a class="linkmenu" href="#">
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <p class="textmenu">Mes annonces</p>
        </a>
    </div>
</div>


<div class="container prosearch">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recherche d'un professionnel</div>

                <div class="card">
                    <div class="card-block">
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

                        </div>

                            <button type="submit" class="btn btn-primary findpro">
                                trouver un pro
                            </button>
                    </form>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Résultats de recherche</div>
                   {{-- <h2>{{ $debut }}</h2> --}}
                        @foreach ($dispos as $dispo)
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">le {{ date('Y-m-d',strtotime($dispo->debut_dispo)) }} à {{ $dispo->debut_heure }}</h3>
                                <p class="card-text">pour {{ $dispo->capacitegarde_max }} enfant(s) max, pendant {{ $dispo->duree }}h.<br /> Commentaires : {{ $dispo->commentaire }}</p>
                            </div>
                        </div>
                        @endforeach

            </div>
        </div>
    </div>
</div>





@endsection
