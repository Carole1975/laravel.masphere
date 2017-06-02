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

                        <div class="form-group{{ $errors->has('dispotext') ? ' has-error' : '' }}">
                            <label for="dispotext" class="col-md-4 control-label">Text</label>

                            <div class="col-md-6">
                                <input id="dispotext" type="text" class="form-control" name="dispotext" value="{{ old('dispotext') }}" required autofocus>

                                @if ($errors->has('dispotext'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dispotext') }}</strong>
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
                    <ul>
                        @foreach ($dispos as $dispo)
                        <h1>{{ $dispo->debut_dispo }}</h1>
                        <h2>{{ $dispo->debut_heure }}</h2>
                        <h3>{{ $dispo->duree }}</h3>
                        <h4>{{ $dispo->commentaire }}</h4>
                        <h4>{{ $dispo->capacitegarde_max }}</h4>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
