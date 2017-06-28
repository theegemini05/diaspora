<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta author="Tobin Karioki">
    <meta description="HTML 5 File">
    <meta viewport="width=device-width, initial-scale=1">

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
        ul.nav-tabs li a{
            color: #fed136;
            background-color: #222222;
        }

        ul.nav-tabs li a:hover{
            color: #222222;
            background-color: #fed136;
        }

        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }
    </style>
</head>

<body>
<div id="main">
@include('hav')
    <div class="container" id="intro">
        <div class="col-lg-12">
            <center><h2>Register Room to {{$hostel->hname}} Hostels</h2></center>
        </div>
    </div>
<div class="container" id="login" style="height: 480px; margin-top: 50px;">
    <center><img src="{{url('images/hostel.jpg')}}"></center>
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/registerhostelrooms') }}">
        {{ csrf_field() }}
        @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><center>{{ session('status') }}</center></strong>
            </div>
        @endif
        <input type="hidden" value="{{$hostel->id}}" name="hostel_id">
        <div class="form-group{{ $errors->has('rno') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 hostel">
                <input style="border: 1px solid #fed136;height: 50px;" id="name" type="number" class="form-control" name="rno" value="{{ old('rno') }}" placeholder="Enter Room Number" required autofocus>

                @if ($errors->has('rno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rno') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('capacity') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 name">
                <input style="border: 1px solid #fed136;" id="pics" type="text" class="form-control" name="capacity" value="{{ old('capacity') }}" placeholder="Room Capacity(Persons)" required autofocus>

                @if ($errors->has('capacity'))
                    <span class="help-block">
                        <strong>{{ $errors->first('capacity') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 rent">
                <input style="border: 1px solid #fed136;" id="pics" type="text" class="form-control" name="rent" value="{{ old('rent') }}" placeholder="Hostel_Room Rent" required autofocus>

                @if ($errors->has('rent'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rent') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 180px;">
                    register hostel_room <i class="fa fa-user-plus"></i>
                </button>
            </div>
        </div>
    </form>
</div>

@include('sidenav')

<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</div>
</body>

</html>