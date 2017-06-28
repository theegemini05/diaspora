<!doctype html>
<html lang="en">
<head>
    <title>Diaspora Room Booking</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tobin Karioki">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{url('css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('css/diaspora.css')}}">
    <link rel="stylesheet" href="{{url('css/diasp.css')}}">

    <link rel="stylesheet" href="{{url('/css/diasporaTables.css')}}">

    <link rel="stylesheet" href="{{url('css/sidenav.css')}}">

    <link rel="icon" href="{{url('images/eger.png')}}">

    <style>
        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }
    </style>
</head>

<body>
<div id="main">
    @include('hav')

    <div class="container">
            @if(Auth::user()->active == 2)
                <div class="col-md-12" id="mainBody">
                    <center><h2 style="border-bottom: 1px solid #fed136;margin-bottom: 30px; ">Diaspora Room Booking System Users</h2></center>
                    <center><table id="users">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admin as $user)
                                <tr>
                                    <td>{{$user->fname}}</td>
                                    <td>{{$user->lname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->p_number}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>@if($user->role == "Landlord" && $user->active == 0)<a class="btn" type="submit" href="{{url('/home/approvelandlord/'.$user->id)}}" style="background-color: #fed136; color: black; border: 2px solid black; height: 40px;">Approve Landlordship</a> @elseif($user->role == "Landlord" && $user->active == 1) <a class="btn" href="" style="background-color: #fed136; color: black; border: 2px solid black; height: 40px;" disabled="">Approve Landlordship</a> @endif</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table></center>
                </div>
        @endif
    </div>
</div>

@include('sidenav')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
<script src="{{url('/js/jquery.dataTables.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#users').dataTable();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#hostels').dataTable();
    });
</script>
</body>
</html>