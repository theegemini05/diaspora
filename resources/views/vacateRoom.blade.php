<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta author="Tobin Karioki">
    <meta description="HTML 5 File">
    <meta viewport="width=device-width, initial-scale=1">

    <title>Diaspora Room Booking</title>

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/jquery.dataTables.min.css')}}">

    <link rel="stylesheet" href="{{url('/css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('/css/diaspora.css')}}">

    <link rel="stylesheet" href="{{url('/css/diasporaTables.css')}}">

    <link rel="stylesheet" href="{{url('/css/sidenav.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="icon" href="{{url('images/eger.png')}}"/>

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
<?php $vacant=0;?>
<div id="main">
    @include('hav')
    <div class="container" style="padding-top: 60px;">
        <div class="row">
        <div class="col-lg-12" style="margin-bottom: 50px;">
        @if (session('vacate'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><center>{{ session('vacate') }}</center></strong>
            </div>
        @endif
        @foreach($hostels as $nyumba)
            <h1 class="page-header" style="color: #fff; border-bottom: 1px solid #fed136;">vacate rooms
                <small style="color: #fed136;"><b style="font-size: 30px;"> {{$nyumba->hname}} {{$nyumba->hregion}} </b></small>
            </h1>

            <table id={{$vacant}}>
                <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Occupant Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nyumba->rooms as $room)
                    @foreach($room->occupiedrooms as $occupied)
                        @if($occupied->status == 1)
                            <tr>
                                <td>{{$occupied->room->rno}}</td>
                                <td>{{$occupied->user->fname}} {{$occupied->user->lname}}</td>
                                <td><a href="{{url('/home/vacate/'.$occupied->room->id).'/'.$occupied->user->id}}" class="btn" style="background-color: #fed136; border: 2px solid black; color: black;">Vacate Occupant</a> </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
                <?php $vacant++; ?>
        @endforeach
    </div>
</div>

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
            for(i = 0; i < {{$vacant}}; i++){
            $('#'+i).dataTable();}
        });
</script>
</body>
</html>
