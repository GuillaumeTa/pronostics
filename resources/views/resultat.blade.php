@extends('layouts.app')

@section('CSSpages')
<link href='css/resultat.css' rel='stylesheet'>
@endsection

@section('content')

	@admin
<div class="Match container">
		<form action="{{ route('resultat.store') }}" method="post">
			{{ csrf_field() }}
		<div class="row">
			<div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<h3>Match du </h3>
			</div>
			<div class="date col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
				<input type="text" class="form-control" name="date" placeholder="00/00">
			</div>
		</div>

		<div class="equipes row">
				<div class="equipe1 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
					<input type="text" class="form-control" name="equipe_1" placeholder="Equipe 1">
				</div>
				<div class="versus col-xs-12 col-sm-12 col-md-2">VS</div>
				<div class="equipe2 col-xs-12 col-sm-12 col-md-3">
					<input type="text" class="form-control" name="equipe_2" placeholder="Equipe 2">
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
							<span>Equipe 1</span>
						</div>
						<label class="sr-only" for="inlineFormInputName2">Score1</label>
						<input type="number" name="score_1" class="form-control mb-2 mr-sm-2"
							id="inlineFormInputName2" placeholder="score_1">
					</div>
					<div class="score2 col-xs-12 col-sm-12 col-md-4">
						<div class="equipeVotes">
							<span>Equipe 2</span>
						</div>
						<label class="sr-only" for="inlineFormInputName2">Score2</label>
						<input type="number" name="score_2" class="form-control mb-2 mr-sm-2"
							id="inlineFormInputName2" placeholder="score_2">
					</div>
				</div>
			<div class="row">
				<div class="button col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
					<input type="submit" class="btn btn-primary btn-lg btn-block">
				</div>
			</div>
		</form>
</div>
	@endadmin
	@auth
		@foreach($rslt as $resultat)
		<div class="Match container">
				<div class="row">
					<div class="match col-xs-12 col-sm-12 col-md-8 col-md-offset-2 ">
						<h3>Match du <?php echo $resultat->date?> :</h3>
					</div>
				</div>

				<div class="equipes row">
					<div class="equipe1 col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
						<p><?php echo $resultat->equipe_1?></p>
					</div>
					<div class="versus col-xs-12 col-sm-12 col-md-2">VS</div>
					<div class="equipe2 col-xs-12 col-sm-12 col-md-3">
						<p><?php echo $resultat->equipe_2?></p>
					</div>
				</div>
				<div class="score row">
					<div class="result col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
						<h4>Résultat du match</h4>
					</div>
				</div>
				<div class="scores row">
					<div class="score1 col-xs-12 col-sm-12 col-md-4 col-md-offset-2">
						<p><?php echo $resultat->score_1?></p>
					</div>
					<div class="score2 col-xs-12 col-sm-12 col-md-4">
						<p><?php echo $resultat->score_2?></p>
					</div>
				</div>
		</div>
		@endforeach
	@endauth
	@guest
		<p class="guest">Veuillez vous connecter pour consulter les résultats.</p>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Login</div>

						<div class="panel-body">
							<form class="form-horizontal" method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email" class="col-md-4 control-label">E-Mail Address</label>

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
									<label for="password" class="col-md-4 control-label">Password</label>

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
											Login
										</button>

										<a class="btn btn-link" href="{{ route('password.request') }}">
											Forgot Your Password?
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

