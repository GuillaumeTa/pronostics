@extends('layouts.app')

@section('CSSpages')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/welcome.css">
@endsection

@section('content')
    <div class="content container">
        <div class="row">
            <div class="logo col-xs-12 col-sm-12 col-md-2">
                <img src="https://www.mpadeco.com/thumb.php?zc=3&f=5,0,0,0,0&src=/sites/mpadeco/files/products/824.png&fl=none&w=360&h=360"
                     alt="Fire Balloon">
            </div>
            <div class="title col-xs-12 col-sm-12 col-md-10">
                <h1>Bienvenue sur G & S Prono !</h1>
            </div>
        </div>
        <div class="row">
            <div class="accueil col-xs-12 col-sm-12 col-md-6">
                <a href="http://localhost/pronostics/public/pronostics" class="btn btn-primary btn-lg btn-block"
                   role="button">Pronostic</a>

            </div>
            <div class="accueil col-xs-12 col-sm-12 col-md-6">
                <a href="http://localhost/pronostics/public/resultat" class="btn btn-primary btn-lg btn-block"
                   role="button">Résultat</a>

            </div>
        </div>
        <div class="row">
            <div class="accueil col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <a href="http://localhost/pronostics/public/classement" class="btn btn-primary btn-lg btn-block"
                   role="button">Classement</a>

            </div>
        </div>
    </div>
@endsection