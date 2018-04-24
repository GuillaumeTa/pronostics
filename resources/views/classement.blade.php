@extends('layouts.app')

@section('CSSpages')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/classement.css">
@endsection

@section('content')
    @admin
    <h3>Bonjour Admin !</h3>
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
        <h3>Veuillez vous connecter pour consulter le classement.</h3>
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

