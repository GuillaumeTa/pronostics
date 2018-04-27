@extends('layouts.app')

@section('CSSpages')
<link href='css/pronostics.css' rel='stylesheet'>
@endsection

@section('content')

@admin
<h3>Bonjour Admin !</h3>
<div class="Match container">
	<form action="{{ route('resultat.store') }}" method="post">
		{{ csrf_field() }}
		<div class="title row">
			<div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<h3>Match du :</h3>
			</div>
			<div class="date col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
				<input type="text" class="form-control" name="date" placeholder="AAAA-MM-JJ">
			</div>
		</div>

		<div class="row">
			<div class="equipe1 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
				<input type="text" class="form-control" name="equipe_1" placeholder="Equipe 1">
			</div>
			<div class="versus col-xs-12 col-sm-12 col-md-2"><h3>VS</h3></div>
			<div class="equipe2 col-xs-12 col-sm-12 col-md-3">
				<input type="text" class="form-control" name="equipe_2" placeholder="Equipe 2">
			</div>
		</div>
		<div class="row">
			<div class="button col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
				<input type="submit" value="Envoyer" class="btn btn-primary btn-lg btn-block">
			</div>
		</div>
	</form>
</div>
@endadmin 
@auth
	@foreach($match as $matchs)
	<div class="Match container">
			<div class="title row">
				<div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
					<h3>Match du {{ $matchs->date }} :</h3>
				</div>
			</div>
			<div class="equipes row">
				<div class="equipe1_2 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
					<p>{{ $matchs->equipe_1 }}</p>
				</div>
				<div class="versus col-xs-12 col-sm-12 col-md-2"><h3>VS</h3></div>
				<div class="equipe1_2 col-xs-12 col-sm-12 col-md-3">
					<p>{{ $matchs->equipe_2 }}</p>
				</div>
			</div>
			<div class="score row">
				<div class="result col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
					<h4>Choisissez le résultat</h4>
				</div>
			</div>
			<div class="scores row">
				<form action="{{ route('pronostics.store') }}" method="post">
					{{ csrf_field() }}
					<div class="score1 col-xs-12 col-sm-12 col-md-4 col-md-offset-2">
						<label class="sr-only" for="inlineFormInputName2">Score1</label>
						<input type="number" name="score_equipe_1" class="form-control mb-2 mr-sm-2"
							   id="inlineFormInputName2" placeholder="score equipe 1">
					</div>

					<div class="col-xs-2">
						<input type="hidden" name="id_match" value='{{$matchs->id}}'>
					</div>

					<div class="col-xs-2">
						<input type="hidden" name="id_user" value='{{Auth::user()->id}}'>
					</div>

					<div class="score2 col-xs-12 col-sm-12 col-md-4">
						<label class="sr-only" for="inlineFormInputName2">Score2</label>
						<input type="number" name="score_equipe_2" class="form-control mb-2 mr-sm-2"
							   id="inlineFormInputName2" placeholder="score equipe 2">
					</div>
					<div class="row">
						<div class="button col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
							<input type="submit" value="Envoyer" class="btn btn-primary btn-lg btn-block">
						</div>
					</div>
				</form>
			</div>
		</div>
	@endforeach
@endauth
@guest
        <h3>Veuillez vous connecter pour consulter les pronostics.</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Connexion</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Adresse E-Mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Mot de passe</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Connexion
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Mot de passe oublié ?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
    @endsection
