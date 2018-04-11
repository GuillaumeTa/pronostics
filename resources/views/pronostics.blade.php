@extends('layouts.app') @section('CSSpages')
<link href='css/pronostics.css' rel='stylesheet'>
@endsection @section('content')

<!-- MATCH 1 -->
<div class="container">
	<div class="Match">
				@foreach($match as $matchs)
	
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div class="match col-md-8 col-xs-12">
				
				<p>Match du {{$matchs->date}}</p>
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="equipes row ">
			<div class="equipe1 col-md-2 col-xs-16">
				<p>
					<br />{{$matchs->equipe_1}}<br />
				</p>
			</div>
			<p class="versus">VS</p>
			<div class="equipe2 col-md-2 col-xs-16">
				<p>
					<br />{{$matchs->equipe_2}}<br />
				</p>
			</div>

			<div class="scorePrev col-md-4">
				<p>Score prévisionel</p>
			</div>
			<div class="equipeVotes col-md-2">
				<p>equipe 1</p>
			</div>
			<div class="equipeVotes col-md-2">
				<p>equipe 2</p>
			</div>
			<div class="scores">
			
			
				<form action="{{ route('pronostics.store') }}" method="post">
					{{ csrf_field() }}
					<div class="score1 col-xs-2">
						<label class="sr-only" for="inlineFormInputName2">Score1</label> <input
							type="number" name="score_equipe_1"
							class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
							placeholder="score-1">
					</div>
					<div class="score2 col-xs-2">
						<label class="sr-only" for="inlineFormInputName2">Score2</label> <input
							type="number" name="score_equipe_2"
							class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
							placeholder="score-2"> 
							<input type="submit" class="buton btn btn-secondary btn-sm"></input>
								<input type="hidden" name="id_user" value="{{Auth::user()->id}}"></input>
					<input type="hidden" name="id_match" value="{{ $matchs->id }}"></input>
							
					</div>
				
				</form>
			</div>
			


		</div>
		
	</div>
	@endforeach
	</div>
	
	 @endsection