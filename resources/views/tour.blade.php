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
    <link rel="stylesheet" href="{{url('/css/jquery.dataTables.min.css')}}">

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
                <h3 class="page-header" style="color: #fed136; border-bottom:1px solid #fed136;"><b style="font-size: 30px;">r</b>ooms <b style="font-size: 30px;">o</b>ffered <b style="font-size: 30px;">b</b>y <b style="font-size: 30px;"> {{$hostel->hname}} {{$hostel->hregion}} </b></h3>
            </div>

            <table id="rooms">
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Rent per Month(KSH)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($roomdetails as $data)

                    <tr>
                        <td>{{$data->rno}}</td>
                        <td>{{$data->rent}}</td>
                        @if($data->status == 1)
                            <td>Booked</td>
                        @else
                            <td>Vacant</td>
                        @endif
                        @if($data->status == 1)
                            <td><button class="btn" style="background-color: rgba(242, 242, 242, 0); color: #fed136; border: 2px solid #000000; width: 200px;" disabled>Room Booked</button></td>
                        @else
                            <td><a @if(!Auth::guest()) href="{{url('/book/'.$hostel->id.'/'.$data->id)}}" @else href="{{url('/login')}}" @endif class="btn" style="background-color: #fed136; color: #000000; border: 2px solid #000000; width: 200px;">Book Room</a></td>
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
<script src="{{url('/js/jquery.dataTables.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#rooms').dataTable();
    });
</script>
</body>
</html>
