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
    @if (session('status'))
        <div class="container" id="login" style="height: 50px;">
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> <br>
            {{ session('status') }}
        </div>
        </div>
    @endif

<div class="container" id="login" style="height: 470px;">
    <center><img src="{{url('images/hostel.jpg')}}"></center>
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/registerhostel') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('hname') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 hostel">
                <input style="border: 1px solid #fed136;" id="name" type="text" class="form-control" name="hname" value="{{ old('fname') }}" placeholder="Enter Hostel Name" required autofocus>

                @if ($errors->has('hname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('hname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('hregion') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 region">
                <select style="border: 1px solid #fed136;" id="name" class="form-control" name="hregion">
                    <option value="" selected disabled>Select Region in Diaspora</option>
                    <option value="Njokerio">Njokerio</option>
                    <option value="Right">Right</option>
                    <option value="Booster">Booster</option>
                    <option value="Carwash">Carwash</option>
                </select>

                @if ($errors->has('hregion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('hregion') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 address">
                <input style="border: 1px solid #fed136;" id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Hostel-Address" required>

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('pics') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 pics">
                <input style="border: 1px solid #fed136;" id="pics" type="file" class="form-control" name="pics" value="{{ old('pics') }}"required autofocus>

                @if ($errors->has('pics'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pics') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 160px;">
                    register hostel <i class="fa fa-user-plus"></i>
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