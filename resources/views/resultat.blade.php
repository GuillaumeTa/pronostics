@extends('layouts.app')

@section('CSSpages')
<link href='css/resultat.css' rel='stylesheet'>
@endsection

@section('content')

	@admin
<!-- MATCH admin -->
<div class="Match container">
		<form action="{{ route('resultat.store') }}" method="post">
			{{ csrf_field() }}
		<div class="row">
			<div class="col-md-2"></div>
			<div class="match col-xs-12 col-sm-12 col-md-8 ">
				<p>Match du "date" :</p>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="equipes row">
			<div class="col-md-2"></div>
				<div class="equipe1 col-xs-12 col-sm-12 col-md-3">
					<input type="text" class="form-control" name="equipe_1" placeholder="Equipe 1">
				</div>
				<div class="versus col-xs-12 col-sm-12 col-md-2">VS</div>
				<div class="equipe2 col-xs-12 col-sm-12 col-md-3">
					<input type="text" class="form-control" name="equipe_2" placeholder="Equipe 2">
				</div>
			<div class="col-md-2"></div>
		</div>
		<div class="score row">
				<div class="result col-xs-12 col-sm-12 col-md-12">
					<span>Résultat du match</span>
				</div>
		</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="equipeVotes col-xs-12 col-sm-12 col-md-4">
					<span>Equipe 1</span>
				</div>
				<div class="equipeVotes col-xs-12 col-sm-12 col-md-4">
					<span>Equipe 2</span>
				</div>
				<div class="col-md-2"></div>
			</div>
				<div class="scores row">
					<div class="col-md-2"></div>
					<div class="score1 col-md-4">
						<label class="sr-only" for="inlineFormInputName2">Score1</label>
						<input type="number" name="score_1" class="form-control mb-2 mr-sm-2"
							id="inlineFormInputName2" placeholder="score_1">
					</div>
					<div class="score2 col-md-4">
						<label class="sr-only" for="inlineFormInputName2">Score2</label>
						<input type="number" name="score_2" class="form-control mb-2 mr-sm-2"
							id="inlineFormInputName2" placeholder="score_2">
					</div>
					<div class="col-md-2"></div>
				</div>
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-xs-offset-4 col-sm-6 col-md-2">
					<input type="submit" class="button btn btn-primary btn-lg">
				</div>
				<div class="col-md-5"></div>
			</div>
		</form>
</div>
	@else

	<h1></h1>

	@endadmin

@endsection

