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

        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }
    </style>
</head>

<body>
@include('hav')
<div id="main">
    <div class="container" style="padding-top: 60px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="border-bottom: 1px solid #fed136; color: #fff;">about
                    <small style="color: #fed136"><b style="font-size: 30px;">l</b>umiarj <b style="font-size: 30px">c</b>arwash</small>
                </h1>

                <ol class="breadcrumb" style="background-color: #222222">
                    <li><a href="{{url('/home')}}" style="color: #fed136">home</a></li>
                    <li class="active" style="color: white">about_lumiarj</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.951612700477!2d35.274612672114316!3d-0.3637777957325704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMjEnNDkuNiJTIDM1wrAxNycwMC4yIkU!5e0!3m2!1sen!2ske!4v1466486434368" width="100%" height="450" frameborder="0" style="border:0" scrolling="no"></iframe>
                </div>
            </div>

            <div class="col-md-4" style="color: #fff;">
                <h2 style="border-bottom: 1px solid #fed136; font-size: larger; color: #fed136;"><b style="font-size: 30px;">a</b>bout <b style="font-size: 30px;">l</b>umiarj <b style="font-size: 30px">c</b>arwash </h2>
                <p>address</p>
                <p>867-40200, egerton</p>
                <p><small>Some Text</small></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="border-bottom: 1px solid #fed136; color: #fed136;">our team</h2>
            </div>

            <div class="col-md-4 text-center">
                <div class="thumbnail" style="border: 1px solid #222222">
                    <img class="img-responsive" style="width:160px;height:170px;float:left;" src="{{url('images/(3).jpg')}}" alt="landlord/landlady">
                    <div class="caption">
                        <h3>name name<br>
                            <small>landlord/landlady</small>
                        </h3>

                        <p><i class="fa fa-phone"></i>
                            <abbr title="Phone">P</abbr>: +(254) 70000000<br>
                            (+254) 700000000
                        </p>

                        <p style="text-align:right;"><i class="fa fa-envelope-o"></i>
                            <abbr title="Email">E</abbr>: <a href="mailto:landlord@gmail.com" style="color: #fed136">landlord@gmail.com</a>
                        </p><hr>

                        <ul class="list-unstyled list-inline list-social-icons">
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-facebook-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-twitter-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-google-plus-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-instagram" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-snapchat" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-whatsapp" style="color: #222222"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="thumbnail" style="border: 1px solid #222222">
                    <img class="img-responsive" style="width:135px;height:170px;float:left" src="{{url('images/(8).jpg')}}" alt="caretaker">
                    <div class="caption">
                        <h3>name name<br>
                            <small>care taker</small>
                        </h3>

                        <p><i class="fa fa-phone"></i>
                            <abbr title="phone">P</abbr>: (+254) 700000000<br>
                            (+254) 700000000
                        </p>

                        <p><i class="fa fa-envelope-o"></i>
                            <abbr title="email address">E</abbr>: <a href="mailto:caretaker@gmail.com" style="color: #fed136">caretaker@gmail.com</a>
                        </p><hr>

                        <ul class="list-unstyled list-inline list-social-icons">
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-facebook-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-twitter-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-google-plus-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-instagram" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-snapchat" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-whatsapp" style="color: #222222"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="thumbnail" style="border: 1px solid #222222">
                    <img class="img-responsive" style="width:145px;height:170px;float:left;" src="{{url('images/(28).jpg')}}" alt="agent">
                    <div class="caption">
                        <h3>name name<br>
                            <small>agent</small>
                        </h3>

                        <p><i class="fa fa-phone"></i>
                            <abbr title="phone">P</abbr>: (+254) 700000000<br>
                            (+254) 700000000
                        </p>

                        <p style="text-align:right;"><i class="fa fa-envelope-o"></i>
                            <abbr title="email address">E</abbr>: <a href="mailto:agent@gmail.com" style="color: #fed136">agent@gmail.com</a>
                        </p><hr>

                        <ul class="list-unstyled list-inline list-social-icons">
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-facebook-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-twitter-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-google-plus-square" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-instagram" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-snapchat" style="color: #222222"></i></a></li>
                            <li><a href="{{url('#')}}"><i class="fa fa-2x fa-whatsapp" style="color: #222222"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')
    </div></div>

@include('sidenav')

<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</body>
</html>