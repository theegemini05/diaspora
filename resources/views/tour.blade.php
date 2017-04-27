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
<div id="main">
    @include('hav')

    <div class="container" style="padding-top: 60px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color: #fff; border-bottom: 1px solid #fed136;">tour
                    <small style="color: #fed136;"><b style="font-size: 30px;"> {{$hostel->hname}} {{$hostel->hregion}} </b></small>
                </h1>

                <ol class="breadcrumb" style="background-color: #222222">
                    <li><a href="/diaspora/public/home" style="color: #fed136;">home</a></li>
                    <li class="active" style="color: white">contact_{{$hostel->hname}}</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @include('hostelCarousel')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header" style="color: #fed136; border-bottom:1px solid #fed136;"><b style="font-size: 30px;">r</b>ooms <b style="font-size: 30px;">o</b>ffered <b style="font-size: 30px;">b</b>y <b style="font-size: 30px;"> {{$hostel->hname}} {{$hostel->hregion}} </b></h3>
            </div>

            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified" id="myTab">
                    @foreach($hostel->rooms as $room)
                        @if($room->id==1)
                            <li class="active"><a href="#{{$hostel->hname}}{{$room->rno}}" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">room</b>{{$room->rno}}</a></li>
                        @else
                            <li><a href="#{{$hostel->hname}}{{$room->rno}}" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">room</b>{{$room->rno}}</a></li>
                        @endif
                    @endforeach
                </ul>


                <div class="tab-content" id="myTabContent">
                    @foreach($hostel->rooms as $room)
                        @if($room->id==1)
                            <div class="tab-pane active fade in" id="{{$hostel->hname}}{{$room->rno}}">
                        @else
                            <div class="tab-pane fade in" id="{{$hostel->hname}}{{$room->rno}}">
                        @endif
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 style="color: #fed136;"><b style="font-size: 30px;">r</b>oom {{$room->rno}}</h4>
                                @include('hostelRoomCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>

                                <a style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn" @if(!Auth::guest())href="{{url('/book/'.$hostel->id.'/'.$room->id)}}"@else href="{{url('/login')}}"@endif><i class="fa fa-gavel"></i> book room {{$room->rno}}</a><br><br><br>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><br><br><br>

        @include('footer')
    </div>
</div>
</div>
@include('sidenav')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>

</body>
</html>
