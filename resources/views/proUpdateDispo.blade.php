@extends('layouts.app')

@section('content')
<?php
    $test = $debut_date;
    $exploded_date = explode(' ', $test);
    $date = $exploded_date[0];
?>

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
    <div class="dispo-page selected">
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
                        <form class="form-horizontal" role="form" method="POST" action="/updateDispo/{{ $disponibilite->id }}">
                        {{ csrf_field() }}

                            <div class="form-group" id="datedebut">
                            <p>{{ $disponibilite->id }}</p>
                                <label for="" class="col-md-4 control-label">Date</label>
                                <div class="col-md-10 col-md-offset-1 input">
                                    <input class="rechercheinput" id="datedebut" type="date" name="datedebut" value="<?php echo $date ?>">
                                </div>
                            </div>

                            <div class="form-group" id="heure">
                                <label for="" class="col-md-4 control-label">Heure</label>
                                <div class="col-md-10 col-md-offset-1 input">
                                    <input class="rechercheinput" id="heure" type="time" name="heure" value="{{ $disponibilite->debut_heure }}">
                                </div>
                            </div>

                            <div class="form-group" id="dureeheure">
                                <label for="" class="col-md-4 control-label">Durée en heure</label>
                                <div class="col-md-10 col-md-offset-1">
                                    <select name="dureeheure" id="" class="form-control col-md-12">
                                        <option <?php if($disponibilite->duree == 1) echo 'selected="selected"'; ?> >1</option>
                                        <option <?php if($disponibilite->duree == 2) echo 'selected="selected"'; ?> >2</option>
                                        <option <?php if($disponibilite->duree == 3) echo 'selected="selected"'; ?> >3</option>
                                        <option <?php if($disponibilite->duree == 4) echo 'selected="selected"'; ?> >4</option>
                                        <option <?php if($disponibilite->duree == 5) echo 'selected="selected"'; ?> >5</option>
                                        <option <?php if($disponibilite->duree == 6) echo 'selected="selected"'; ?> >6</option>
                                        <option <?php if($disponibilite->duree == 7) echo 'selected="selected"'; ?> >7</option>
                                        <option <?php if($disponibilite->duree == 8) echo 'selected="selected"'; ?> >8</option>
                                        <option <?php if($disponibilite->duree == 9) echo 'selected="selected"'; ?> >9</option>
                                        <option <?php if($disponibilite->duree == 10) echo 'selected="selected"'; ?> >10</option>
                                        <option <?php if($disponibilite->duree == 11) echo 'selected="selected"'; ?> >11</option>
                                        <option <?php if($disponibilite->duree == 12) echo 'selected="selected"'; ?> >12</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="nbrmax_enfants">
                                <label for="" class="col-md-4 control-label" style="">Nombre Enfant Max</label>
                                <div class="col-md-10 col-md-offset-1">
                                    <select name="enfants" id="" class="form-control col-md-12">
                                        <option <?php if($disponibilite->capacitegarde_max == 1) echo 'selected="selected"'; ?> >1</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 2) echo 'selected="selected"'; ?>>2</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 3) echo 'selected="selected"'; ?>>3</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 4) echo 'selected="selected"'; ?>>4</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 5) echo 'selected="selected"'; ?>>5</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 6) echo 'selected="selected"'; ?>>6</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 7) echo 'selected="selected"'; ?>>7</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 8) echo 'selected="selected"'; ?>>8</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 9) echo 'selected="selected"'; ?>>9</option>
                                        <option <?php if($disponibilite->capacitegarde_max == 10) echo 'selected="selected"'; ?>>10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="commentaire">
                                <label for="" class="col-md-4 control-label">Commentaire</label>
                                <div class="col-md-10 col-md-offset-1 input">
                                    <textarea type="text" id="commentaire" name="commentaire" class="col-md-12">{{ $disponibilite->commentaire }}</textarea>
                                    <!--<input class="rechercheinput" id="dureeheure" type="text" name="dureeheure">-->
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary attent">Mettre à jour la disponibilité</button>

                        </form>
                    </div>
            </div>
        </div>
    </div>
    @endsection
