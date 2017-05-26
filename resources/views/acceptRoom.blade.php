<!doctype html>
<html lang="en">
<head>
    <title>Diaspora Room Booking</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tobin Karioki">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('css/diaspora.css')}}">

    <link rel="stylesheet" href="{{url('css/sidenav.css')}}">

    <link rel="icon" href="{{url('images/eger.png')}}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDRhnfi6S1AIFzmzT7mL7ETM0SugFuQ7c&libraries=places" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }

        #map-canvas {
            width: 1130px;
            height: 400px;
        }
    </style>
</head>

<body>
<div id="main">
    @include('hav')

    <div class="container" style="margin-top: 120px; color: #fed136; text-align: left; font-size: 20px;>
        <div class="row">
    <div class="col-lg-12">
        @if (session('habari'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><center>{{ session('habari') }}</center></strong>
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><center>{{ session('message') }}</center></strong>
            </div>
        @endif
            @if (session('messages'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><center>{{ session('messages') }}</center></strong>
                </div>
            @endif

        <center><h2 style="margin-bottom: 30px; border-bottom: 2px solid #fed136;">Room Acceptance Prompt for Room {{$roomdetails->rno}} in {{$hosteldetails->hname}} Hostels</h2></center>

            <div id="map-canvas">

            </div>

        <form method="post" action="{{url('/home/occupied')}}">
            {{ csrf_field() }}

            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="room_id" value="{{$roomdetails->id}}">
            <input type="hidden" name="hostel_id" value="{{$hosteldetails->id}}">
            <input type="hidden" name="book_id" value="{{$bookdetails->id}}">
            <input type="hidden" name="approve_id" value="{{$acceptroom->id}}">

            {{--@if( isset($occupieddetails))--}}
                {{--@foreach($occupieddetails as $occupied)--}}
                        <div class="col-lg-6">
                            <center><button href="{{url('/home/accept/'.$hosteldetails->id.'/'.$roomdetails->id.'/'.$bookdetails->id.'/'.$acceptroom->id)}}" class="btn btn-lg btn-success" type="submit" style="width: 300px; margin-top: 25px;" @if($roomdetails->capacity == $roomdetails->currentcapacity) disabled @endif>Accept Room <i class="fa fa-check"></i></button></center>
                        </div>


                    {{--@if($occupied->room_id == $roomdetails->id && !($roomdetails->capacity == $roomdetails->currentcapacity))--}}

                    {{--@endif--}}
                {{--@endforeach--}}
            {{--@else
            @endif--}}
            {{--<div class="col-lg-6">
                <center><button href="{{url('/home/accept/'.$hosteldetails->id.'/'.$roomdetails->id.'/'.$bookdetails->id.'/'.$acceptroom->id)}}" class="btn btn-lg btn-success" type="submit" style="width: 300px; margin-top: 25px;">Accept Room <i class="fa fa-check"></i></button></center>
            </div>--}}
        </form>
            {{--@if(isset($occupieddetails))
                @foreach($occupieddetails as $vacancy)
                    @if($occupied->room_id == $roomdetails->id)--}}

                {{--    @endif
                @endforeach
            @endif--}}
            <div class="col-lg-6">
                <center><td><a href="{{url('/home/decline/'.$hosteldetails->id.'/'.$roomdetails->id.'/'.$bookdetails->id.'/'.$acceptroom->id)}}" class="btn btn-lg btn-danger" style="width: 300px; margin-top: 25px;" @if($roomdetails->capacity == $roomdetails->currentcapacity) disabled @endif>Reject Room <i class="fa fa-times"></i></a></td></center>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('sidenav')
<script>
    var lat = {{$hosteldetails->lat}};
    var lng = {{$hosteldetails->lng}};

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        center:{
            lat: lat,
            lng: lng
        },
        zoom: 15
    });

    var marker = new google.maps.Marker({
        position:{
            lat: lat,
            lng: lng
        },
        map:map
    });
</script>
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
{{--<script src="{{asset('js/maperizer/List.js')}}"></script>
<script src="{{asset('js/maperizer/Maperizer.js')}}"></script>
<script src="{{asset('js/maperizer/map-options.js')}}"></script>
<script src="{{asset('js/maperizer/jqueryui.maperizer.js')}}"></script>--}}
</body>
</html>