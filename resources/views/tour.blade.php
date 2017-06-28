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
    <link rel="stylesheet" href="{{url('/css/jquery.dataTables.min.css')}}">\
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{url('/css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('/css/diaspora.css')}}">

    <link rel="stylesheet" href="{{url('/css/diasporaTables.css')}}">

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
                <h3 class="page-header" style="color: #fed136; border-bottom:1px solid #fed136;"><b style="font-size: 30px;">r</b>ooms <b style="font-size: 30px;">o</b>ffered <b style="font-size: 30px;">b</b>y <b style="font-size: 30px;"> {{$hostel->hname}} {{$hostel->hregion}}</b></h3>
            </div>

            <table id="rooms">
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Rent per Month(KSH)</th>
                        <th>Status</th>
                        <th>Capacity(Persons)</th>
                        <th>Fullness</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($roomdetails as $data)
                    <tr>
                        <td>{{$data->rno}}</td>
                        <td>{{$data->rent}}</td>
                        @if($data->capacity == $data->currentcapacity)
                            <td>Full</td>
                        @else
                            <td>Vacant</td>
                        @endif
                        <td>{{$data->capacity}}</td>
                        @if($data->percent == 0)
                            <td>
                            <div class="progress"  style="width: 350px;">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" id="capacity" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$data->percent}}%; color: #000000; font-weight: bold;">
                                    Empty
                                </div>
                            </div>
                            </td>
                        @else
                            <td>
                            <div class="progress" id="capacity" style="width: 350px;">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" id="capacity" role="progressbar" aria-valuenow="{{$data->percent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$data->percent}}%; color: #000000; font-weight: bold;">
                                    {{$data->percent}}% Occupied
                                </div>
                                </div>
                            </td>
                        @endif
                        {{--<td>
                            <div class="progress" style="width: 350px;">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                    25% Occupied
                                </div>
                            </div>
                        </td>--}}
                        @if($data->percent == 100)
                            <td><button class="btn" style="background-color: rgba(242, 242, 242, 0); color: #fed136; border: 2px solid #000000; width: 200px;" disabled>Fully Occupied</button></td>
                        @else
                            <td><a @if(!Auth::guest()) href="{{url('home/book/'.$hostel->id.'/'.$data->id)}}" @else href="{{url('/login')}}" @endif class="btn" style="background-color: #fed136; color: #000000; border: 2px solid #000000; width: 200px;">Book Room</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><br><br><br>

        @include('footer')
    </div>
</div>
</div>
@include('sidenav')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
<script src="{{url('/js/jquery.dataTables.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js/bootstrap.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#rooms').dataTable();
    });
</script>
</body>
</html>
