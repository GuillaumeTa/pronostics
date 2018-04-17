@extends('layouts.app')

@section('CSSpages')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://localhost/pronostics/public/css/classement.css">
@endsection

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('classement.update', $name_score) }}" >
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
                <div class="row">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">Classement</h3>
                        </div>
                        <table class="table">
                            <thead>
                            <tr class="filters">
                                <th><span>Nom</span></th>
                                <th><span>Score</span></th>
                                <th><span>Modif</span></th>
                            </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <td>{{$name_score->name}}</td>
                                    <td><input type="text" class="width_inp form-control" name="score" placeholder="Score" value={{$name_score->score}}></td>
                                    <td><input type="submit" value="Envoyer" class="btn btn-primary btn-sm"></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
        </form>
    </div>
@endsection