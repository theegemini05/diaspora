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

<div class="container" id="login" style="height: 480px;">
    <center><img src="{{url('images/user.jpg')}}"></center>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/book') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 name">
                <input style="border: 1px solid #fed136;" id="name" type="text" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="Enter Your First Name" required autofocus>

                @if ($errors->has('fname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 name">
                <input style="border: 1px solid #fed136;" id="name" type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="Enter Your Last Name(s)" required autofocus>

                @if ($errors->has('lname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 email">
                <input style="border: 1px solid #fed136;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email-Address" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('pnumber') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 phone">
                <input style="border: 1px solid #fed136;" id="pnumber" type="int" class="form-control" name="pnumber" value="{{ old('pnumber') }}" placeholder="Enter Your Phone Number" required autofocus>

                @if ($errors->has('pnumber'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pnumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 160px;">
                    book room <i class="fa fa-user-plus"></i>
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