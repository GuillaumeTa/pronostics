@extends('layouts.app')

@section('CSSclassement')
    <link rel="stylesheet" href="css/classement.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6">{{ Auth::user()->name }}</div>
            <div class="score col-md-2">{{ Auth::user()->score }}</div>
            <div class="vide col-md-2"></div>
        </div>
        <div class="espace col-md-12"></div>
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6">Je suis un nom2</div>
            <div class="score col-md-2">Je suis un score2</div>
            <div class="vide col-md-2"></div>
        </div>
        <div class="espace col-md-12"></div>
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6">Je suis un nom3</div>
            <div class="score col-md-2">Je suis un score3</div>
            <div class="vide col-md-2"></div>
        </div>
        <div class="espace col-md-12"></div>
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6">Je suis un nom4</div>
            <div class="score col-md-2">Je suis un score4</div>
            <div class="vide col-md-2"></div>
        </div>
        <div class="espace col-md-12"></div>
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6">Je suis un nom5</div>
            <div class="score col-md-2">Je suis un score5</div>
            <div class="vide col-md-2"></div>
        </div>
        <div class="espace col-md-12"></div>
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6">Je suis un nom6</div>
            <div class="score col-md-2">Je suis un score6</div>
            <div class="vide col-md-2"></div>
        </div>
        <div class="col-md-12"></div>
    </div>
@endsection
