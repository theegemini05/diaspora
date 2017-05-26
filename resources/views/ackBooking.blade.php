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
                    <form role="form" method="POST" action="{{ url('/home/approvebooking') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="fname" value="{{Auth::user()->fname}}">
                        <input type="hidden" name="lname" value="{{Auth::user()->lname}}">
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <input type="hidden" name="pnumber" value="{{Auth::user()->p_number}}">
                        <input type="hidden" name="landlord_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="hostel_id" value="{{$hostel->id}}">
                        <input type="hidden" name="user_id" value="{{$ret->user_id}}">
                        <input type="hidden" name="room_id" value="{{$ret->room_id}}">
                        <input type="hidden" name="book_id" value="{{$ret->id}}">
                        {{--<input type="hidden" name="message_id" value="{{$messages->id}}">--}}
                    <div class="col-lg-6">
                        @if($gets->currentcapacity == $gets->capacity)
                            <center><td><button class="btn btn-lg btn-success" type="submit" style="width: 250px;" href="" disabled>Approve Request <i class="fa fa-check"></i></button></td></center>
                        @else
                            <center><td><button class="btn btn-lg btn-success" type="submit" style="width: 250px;" href="{{url('/home/approvebooking/'.$gets->hostel_id.'/'.$gets->id.'/'.$ret->id)}}">Approve Request <i class="fa fa-check"></i></button></td></center>
                        @endif
                    </div>
                    </form>
                    <form role="form" method="POST" action="{{ url('/home/declinebooking') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="fname" value="{{Auth::user()->fname}}">
                        <input type="hidden" name="lname" value="{{Auth::user()->lname}}">
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <input type="hidden" name="pnumber" value="{{Auth::user()->p_number}}">
                        <input type="hidden" name="landlord_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="hostel_id" value="{{$hostel->id}}">
                        <input type="hidden" name="user_id" value="{{$ret->user_id}}">
                        <input type="hidden" name="room_id" value="{{$ret->room_id}}">
                        <input type="hidden" name="book_id" value="{{$ret->id}}">
                        {{--<input type="hidden" name="message_id" value="{{$messages->id}}">--}}
                        <div class="col-lg-6">
                            @if($gets->currentcapacity == $gets->capacity)
                                <center><td><button class="btn btn-lg btn-danger" style="width: 250px;" disabled>Disapprove Request <i class="fa fa-times"></i></button></td></center>
                            @else
                                <center><td><button class="btn btn-lg btn-danger" style="width: 250px;">Disapprove Request <i class="fa fa-times"></i></button></td></center>
                            @endif
                        </div>
                    </form>
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