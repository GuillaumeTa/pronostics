<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GS Prono</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("https://png.pngtree.com/thumb_back/fw800/back_pic/03/72/13/9257b90dd201ba6.jpg");
                /*background-color: #fff;*/
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            /*.title {
                font-size: 84px;
            }*/

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .accueil {
                margin-bottom: 125px;
                margin-top: 125px;
            }
        </style>

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="accueil col-sm-12">
                    <a class="btn btn-secondary btn-lg" href="http://localhost/pronostics/public/pronostics" role="button">Pronostics</a>
                </div>
                <div class="accueil col-sm-12">
                    <a class="btn btn-secondary btn-lg" href="http://localhost/pronostics/public/resultat" role="button">Résultats</a>
                </div>
                <div class="accueil col-sm-12">
                    <a class="btn btn-secondary btn-lg" href="http://localhost/pronostics/public/classement" role="button">Classements</a>
                </div>
            </div>
        </div>
    </body>
</html>
