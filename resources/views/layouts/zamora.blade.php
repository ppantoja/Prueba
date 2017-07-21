<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> SSGGPP </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css')}} ">
    <style type="text/css">
        .navbar-default {
            border-color: #FF2727;
        }
        .login-title-index{
            font-size: 50px;
            margin-top: 5%;
        }

        @media (max-width: 480px) {
           .login-title-index{
            font-size: 30px;
            margin-top: 5%;
            text-align: center;
        }

        #zamora-navbar{
            display: none;
        }

        body{
            margin-top: 10px;
        }

        footer{
            font-size: 10px;
        }
    }

</style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" id="zamora-navbar">
            <div class="container">
                <img class="img-responsive" src="{{ asset('images/cintillo_2017_zamora.jpg') }}">
            </div>
        </nav>

        @yield('content')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Desarollado por Dirección de Tecnología y Sistemas Todos los derechos para la Coordinación de Desarollo © 2017
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
