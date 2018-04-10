@extends('layouts.app')

@section('CSSpages')
<link href='css/pronostics.css' rel='stylesheet'>
@endsection

@section('content')

	@admin
<!-- MATCH 1 -->
<div class="container">
	<div class="Match">
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div class="match col-md-8 col-xs-12">
				<p>Match du "date" :</p>
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>

		<div class="equipes row ">
			<form action="{{ route('resultat.store') }}" method="post">
				{{ csrf_field() }}
				<div class="equipe1 col-md-2 col-xs-16">
					<p>
						<br /><input type="text" name="equipe_1"><br />
					</p>
				</div>
				<p class="versus">VS</p>
				<div class="equipe2 col-md-2 col-xs-16">
					<p>
						<br /><input type="text" name="equipe_2"><br />
					</p>
				</div>

				<div class="scorePrev col-md-4">
					<p>Résultat du match</p>
				</div>
				<div class="equipeVotes col-md-2">
					<p>equipe 1</p>
				</div>
				<div class="equipeVotes col-md-2">
					<p>equipe 2</p>
				</div>
				<div class="scores">
					<div class="score1 col-xs-2">
						<label class="sr-only" for="inlineFormInputName2">Score1</label>
						<input type="number" name="score_1" class="form-control mb-2 mr-sm-2"
							id="inlineFormInputName2" placeholder="score_1">
					</div>
					<div class="score2 col-xs-2">
						<label class="sr-only" for="inlineFormInputName2">Score2</label>
						<input type="number" name="score_2" class="form-control mb-2 mr-sm-2"
							id="inlineFormInputName2" placeholder="score_2">
						<input type="submit" class="buton btn btn-secondary btn-sm">valider</input>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
	@else

	<h1>Vous n'etes pas admin pd</h1>

	@endadmin

@endsection

