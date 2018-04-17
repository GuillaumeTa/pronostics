@extends('layouts.app')

@section('CSSpages')
    <link href='http://localhost/pronostics/public/css/resultat.css' rel='stylesheet'>
@endsection

@section('content')

    <div class="Match container">
		<form method="POST" action="{{ route('resultat.update', $match) }}" >
			{{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
        <div class="title row">
            <div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <h3>Match du :</h3>
            </div>
            <div class="date col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                <input type="text" class="form-control" name="date" placeholder="00/00" value={{$match->date}}>
            </div>
        </div>

        <div class="row">
            <div class="equipe1 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
                <input type="text" class="form-control" name="equipe_1" placeholder="Equipe 1" value={{$match->equipe_1}}>
            </div>
            <div class="versus col-xs-12 col-sm-12 col-md-2"><h3>VS</h3></div>
            <div class="equipe2 col-xs-12 col-sm-12 col-md-3">
                <input type="text" class="form-control" name="equipe_2" placeholder="Equipe 2" value={{$match->equipe_2}}>
            </div>
        </div>
        <div class="score row">
            <div class="result col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
                <h4>Résultat du match</h4>
            </div>
        </div>
        <div class="scores row">
            <div class="score1 col-xs-12 col-sm-12 col-md-4 col-md-offset-2">
                <div class="equipeVotes">
                    <h3>Equipe 1</h3>
                </div>
                <label class="sr-only" for="inlineFormInputName2">Score1</label>
                <input type="number" name="score_1" class="form-control mb-2 mr-sm-2"
                       id="inlineFormInputName2" placeholder="score final" value={{$match->score_1}}>
            </div>
            <div class="score2 col-xs-12 col-sm-12 col-md-4">
                <div class="equipeVotes">
                    <h3>Equipe 2</h3>
                </div>
                <label class="sr-only" for="inlineFormInputName2">Score2</label>
                <input type="number" name="score_2" class="form-control mb-2 mr-sm-2"
                       id="inlineFormInputName2" placeholder="score final" value={{$match->score_2}}>
            </div>
        </div>
        <div class="row">
            <div class="button col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                <input type="submit" value="Envoyer" class="btn btn-primary btn-lg btn-block">
            </div>
        </div>
    </form>
</div>
@endsection
