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

    <style>
        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }
    </style>
</head>

<body>
<div id="main">
@include('hav')

    <div class="container" style="margin-top: 120px; color: #fed136; text-align: left; font-size: 20px;>
        <div class="row">
            <div class="col-lg-12">
                <center><h3>Booking Request for {{$ret->fname}} {{$ret->lname}}</h3></center>
                <center><table>
                        <thead style="color: #FFFFFF;">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name(s)</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Room Number</th>
                            <th>Hostel Name</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$ret->fname}}</td>
                                <td>{{$ret->lname}}</td>
                                <td>{{$ret->email}}</td>
                                <td>{{$ret->pnumber}}</td>
                                <td>{{$gets->rno}}</td>
                                <td>{{$hostel->hname}}</td>
                            </tr>
                        </tbody>
                    </table></center><br>

                <div class="row">
                    <div class="col-lg-6">
                        <center><td><a class="btn btn-lg btn-success" style="width: 250px;">Approve Request <i class="fa fa-check"></i></a></td></center>
                    </div>
                    <div class="col-lg-6">
                        <center><td><a class="btn btn-lg btn-danger" style="width: 250px;">Decline Request <i class="fa fa-times"></i></a></td></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sidenav')

<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</body>
</html>