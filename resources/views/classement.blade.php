@extends('layouts.app')

@section('CSSpages')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/classement.css">
@endsection

@section('content')
    @foreach($name_score as $score)
    <div class="container">
        <div class="row">
            <div class="vide col-md-2"></div>
            <div class="nom col-md-6"><?php echo $score->name?></div>
            <div class="score col-md-2"><?php echo $score->score?></div>
            <div class="vide col-md-2"></div>
        </div>
    </div>
    @endforeach
@endsection
