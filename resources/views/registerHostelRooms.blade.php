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
@include('hav')

<div class="container" id="login" style="height: 350px;">
    <center><img src="{{url('images/hostel.jpg')}}"></center>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerHostelRooms') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('rno') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 hostel">
                <input style="border: 1px solid #fed136;" id="name" type="int" class="form-control" name="rno" value="{{ old('rno') }}" placeholder="Enter Hostel Room Number" required autofocus>

                @if ($errors->has('rno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rno') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('pics') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 pics">
                <input style="border: 1px solid #fed136;" id="pics" type="text" class="form-control" name="pics" value="{{ old('pics') }}" placeholder="Hostel Pics" required autofocus>

                @if ($errors->has('pics'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pics') }}</strong>
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

</body>

</html>