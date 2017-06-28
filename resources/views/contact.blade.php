<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{url('/css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('/css/diaspora.css')}}">

    <link rel="stylesheet" href="{{url('/css/sidenav.css')}}">

    <link rel="icon" href="{{url('images/eger.png')}}">

    <title>Diaspora Room Booking</title>

    <style>
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
                <h1 class="page-header" style="color: #fff; border-bottom: 1px solid #fed136;">contact
                    <small style="color: #fed136;"><b style="font-size: 30px;">{{$hostel->hname}} {{$hostel->hregion}}</b></small>
                </h1>

                <ol class="breadcrumb" style="background-color: #222222">
                    <li><a href="/home" style="color: #fed136;">home</a></li>
                    <li class="active" style="color: white">contact_boraya</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                @include('hostelCarousel')
            </div>

            <div class="col-md-4" style="color: #fed136;">
                <h3 style="border-bottom: 1px solid #fed136; color: #fed136;"><b style="font-size: 30px">c</b>ontact <b style="font-size: 25px;">{{$hostel->hname}}</b></h3>
                <p>Address: {{$hostel->address}}</p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (+254) {{$ret->p_number}}
                </p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email Address">E</abbr>: <a style="color: #fed136;" href="mailto:{{$ret->email}}">{{$ret->email}}</a>
                </p>
            </div>
        </div><br><br>

        <div class="row">
            <div class="col-lg-12">
                <center><a class="btn btn-lg" style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 570px;" @if(Auth::guest())href="{{url('/login')}} @else href="{{url('/home/contactlandlord/'.$hostel->id)}}" @endif">Send message to landlord {{$hostel->hname}} hostels</a></center>
            </div>
        </div><br><br>

        @include('footer')
    </div></div>

@include('sidenav')

<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</body>
</html>