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
                    <ul>
                        @foreach ($annonces as $annonce)
                        <p>{{ $annonce->text }}</p>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('createAnnonce') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('annoncetext') ? ' has-error' : '' }}">
                            <label for="annoncetext" class="col-md-4 control-label">Text</label>

                            <div class="col-md-6">
                                <input id="annoncetext" type="text" class="form-control" name="annoncetext" value="{{ old('annoncetext') }}" required autofocus>

                                @if ($errors->has('annoncetext'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('annoncetext') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                nouvelle annonce
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
