@extends('layouts.app') @section('CSSpages')
<link href='css/pronostics.css' rel='stylesheet'>
@endsection @section('content') @admin
<p>bonjour admin</p>
@endadmin 
@auth
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
					
									<div class="score1 col-xs-2">
						 <input
							type="hidden" name="id_match" value='{{$matchs->id}}'
							
							></input>
					</div>
					
														<div class="score1 col-xs-2">
						 <input
							type="hidden" name="id_user" value='{{Auth::user()->id}}'
							
							></input>
					</div>
					
					
					<div class="score2 col-xs-2">
						<label class="sr-only" for="inlineFormInputName2">Score2</label> <input
							type="number" name="score_equipe_2"
							class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
							placeholder="score-2"> <input type="submit"
							class="buton btn btn-secondary btn-sm"></input>
					</div>
				</form>
			</div>


		</div>
	</div>
	@endforeach
</div>
@endauth  @guest
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
