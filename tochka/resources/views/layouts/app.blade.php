<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tochka</title>

    <link rel="stylesheet" href="{!! asset('/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/magnific-popup.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/docs.min.css') !!}">

    <script src="{!! asset('/js/holder.min.js') !!}"></script>
    <script src="{!! asset('/js/popper.min.js') !!}"></script>
    <script src="{!! asset('/js/jquery-slim.min.js') !!}"></script>
    <script src="{!! asset('/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('/js/bootstrap.js') !!}"></script>
    <script src="{!! asset('/js/jquery.ajaxq-0.0.1.js') !!}"></script>
    <script src="{!! asset('/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('/js/jquery.magnific-popup.js') !!}"></script>

    <style>
        body {
            font-family: 'Lato';
        }
    </style>
</head>
    <body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/generate">
                    Generate DB
                </a>
            </div>
        </div>
    </nav>


        @yield('content')
    </body>
</html>
