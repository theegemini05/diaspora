<!doctype html>
<html>
    <head>
        <title>Diaspora Room Booking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{url('css/yamm.css')}}">

        <link rel="stylesheet" href="{{url('css/diaspora.css')}}">
        <link rel="stylesheet" href="{{url('css/sidenav.css')}}">

        <link rel="icon" href="{{url('images/eger.png')}}">

        <style>
            .map-responsive {
                pointer-events: none;
            }
        </style>
    </head>

    <body>

    @include('adminHav')
        <div class="main">
            <div class="container">

            </div>
        </div>

        <script src="{{url('js/jquery.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/diaspora.js')}}"></script>
    </body>
</html>