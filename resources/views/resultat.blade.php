@extends('layouts.app')

@section('CSSpages')
	<link href='css/resultat.css' rel='stylesheet'>
@endsection

@section('content')

	@admin
	<h3>Bonjour Admin !</h3>
	@foreach($rslt as $resultat)
		<div class="Match container">
			<div class="row">
				<div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2 ">
					<h3>Match du {{ $resultat->date }} :</h3>
				</div>
			</div>

			<div class="equipes row">
				<div class="equipe1_2 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
					<p>{{ $resultat->equipe_1 }}</p>
				</div>
				<div class="versus col-xs-12 col-sm-12 col-md-2"><h3>VS</h3></div>
				<div class="equipe1_2 col-xs-12 col-sm-12 col-md-3">
					<p>{{ $resultat->equipe_2 }}</p>
				</div>
			</div>
			<div class="score row">
				<div class="result col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
					<h4>Résultat du match</h4>
				</div>
			</div>
			<div class="scores row">
				<div class="score1_2 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
					<p>{{ $resultat->score_1 }}</p>
				</div>
				<div class="versus col-xs-12 col-sm-12 col-md-2"><h3>-</h3></div>
				<div class="score1_2 col-xs-12 col-sm-12 col-md-3">
					<p>{{ $resultat->score_2 }}</p>
				</div>
			</div>
			<div class="button col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
				<a class="btn btn-primary btn-lg btn-block" href="{{route('resultat.edit', $resultat->id)}}">Editer</a>
			</div>
		</div>
	@endforeach
	@endadmin
	@auth
		@foreach($rslt as $resultat)
			<div class="Match container">
				<div class="row">
					<div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2 ">
						<h3>Match du {{ $resultat->date }} :</h3>
					</div>
				</div>

				<div class="equipes row">
					<div class="equipe1_2 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
						<p>{{ $resultat->equipe_1 }}</p>
					</div>
					<div class="versus col-xs-12 col-sm-12 col-md-2"><h3>VS</h3></div>
					<div class="equipe1_2 col-xs-12 col-sm-12 col-md-3">
						<p>{{ $resultat->equipe_2 }}</p>
					</div>
				</div>
				<div class="score row">
					<div class="result col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
						<h4>Résultat du match</h4>
					</div>
				</div>
				<div class="scores row">
					<div class="score1_2 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
						<p>{{ $resultat->score_1 }}</p>
					</div>
					<div class="versus col-xs-12 col-sm-12 col-md-2"><h3>-</h3></div>
					<div class="score1_2 col-xs-12 col-sm-12 col-md-3">
						<p>{{ $resultat->score_2 }}</p>
					</div>
				</div>
			</div>
		@endforeach
	@endauth
	@guest
		<h3>Veuillez vous connecter pour consulter les résultats.</h3>
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
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
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

