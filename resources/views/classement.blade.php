@extends('layouts.app')

@section('CSSpages')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/classement.css">
@endsection

@section('content')

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

@endsection

