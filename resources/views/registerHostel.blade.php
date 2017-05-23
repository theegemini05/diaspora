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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDRhnfi6S1AIFzmzT7mL7ETM0SugFuQ7c&libraries=places" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

        #map-canvas {
            width: 1150px;
            height: 400px;
        }
    </style>
</head>

<body>
@include('hav')
    {{--@if (session('status'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> <br>
            {{ session('status') }}
        </div>
    @endif--}}

<div class="container" id="register">
    <img src="{{url('images/hostel.jpg')}}">
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/registerhostel') }}">
        {{ csrf_field() }}
        @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><center>{{ session('status') }}</center></strong>
            </div>
        @endif
        <div class="form-group{{ $errors->has('hname') ? ' has-error' : '' }}" id="input">
            <div class="col-md-6 hostel">
                <input style="border: 1px solid #fed136; width: 1160px;" id="name" type="text" class="form-control" name="hname" value="{{ old('fname') }}" placeholder="Enter Hostel Name" required autofocus>

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
                <input style="border: 1px solid #fed136; width: 1160px;" id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Hostel-Address" required>

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

        <h1 style="color: #fed136;">Input Hostel Location</h1>

        {{--<div class="form-group ">
            <div class="col-lg-6 title">
                <input type="text" style="margin-left: 0px; width: 1160px;" class="form-control input-sm" name="title" placeholder="Enter The Title Of The Location">
            </div>
        </div>--}}

        <div class="form-group">
            <div class="col-lg-6 search">
                <input type="text" id="searchmap" style="margin-left: 0px; width: 1160px;" placeholder="Search For The Location On The Map">
            </div>
            <div id="map-canvas" style="margin-left: 20px; padding-top: 10px; padding-bottom: 10px;"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-6 lat">
                <input type="text" style="margin-left: 0px; width: 1160px;" class="form-control input-sm" name="lat" id="lat">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-6 lng">
                <input type="text" style="margin-left: 0px; width: 1160px;" class="form-control input-sm" name="lng" id="lng">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-lg" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 260px;">
                    register hostel <i class="fa fa-user-plus"></i>
                </button>
            </div>
        </div>
    </form>
</div>

@include('sidenav')
<script>
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        center:{
            lat: -0.371337,
            lng: 35.943236
        },
        zoom: 15
    });

    var marker = new google.maps.Marker({
        position:{
            lat: -0.371337,
            lng: 35.943236
        },
        map: map,
        draggable: true
    });

    var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

    google.maps.event.addListener(searchBox,'places_changed',function(){
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;

        for(i=0;place=places[i];i++){
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location);
        }

        map.fitBounds(bounds);
        map.setZoom(15);
    });

    google.maps.event.addListener(marker,'position_changed',function(){
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

        $('#lat').val(lat);
        $('#lng').val(lng);
    });
</script>
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>

</body>

</html>