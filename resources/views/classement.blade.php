@extends('layouts.app')

@section('CSSpages')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/classement.css">
@endsection

@section('content')
    @admin
    <div class="container">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Classement</h3>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><span>Rang</span></th>
                        <th><span>Nom</span></th>
                        <th><span>Score</span></th>
                        <th><span>Modif</span></th>
                    </tr>
                    </thead>
                    <?php $nombre_de_lignes=1; ?>
                    @foreach($name_score as $score)
                        <tbody>
                        <tr>
                            <td><?php echo $nombre_de_lignes;?></td>
                            <td><?php echo $score->name?></td>
                            <td><?php echo $score->score?></td>
                            <td><a class="btn btn-primary btn-sm " href="{{route('classement.edit', $score->id)}}">Editer</a></td>
                        </tr>
                        </tbody>
                        <?php $nombre_de_lignes++?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endadmin
    @auth
        <div class="container">
            <div class="row">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Classement</h3>
                    </div>
                    <table class="table">
                        <thead>
                        <tr class="filters">
                            <th><span>Rang</span></th>
                            <th><span>Nom</span></th>
                            <th><span>Score</span></th>
                        </tr>
                        </thead>
                        <?php $nombre_de_lignes=1; ?>
                        @foreach($name_score as $score)
                        <tbody>
                        <tr>
                            <td><?php echo $nombre_de_lignes;?></td>
                            <td><?php echo $score->name?></td>
                            <td><?php echo $score->score?></td>
                        </tr>
                        </tbody>
                            <?php $nombre_de_lignes++?>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
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

