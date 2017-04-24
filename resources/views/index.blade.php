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

        <div class="container">
            @if(isset($landlord))


                @if(Auth::user()->role == 'Landlord')
            <div class="col-md-12" id="mainBody">
                <center><h2>{{Auth::user()->lname}} Hostels</h2></center>
                <center><table>
                    <thead>
                    <tr>
                        <th>Hostel Name</th>
                        <th>Hostel Region</th>
                        <th>Hostel Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($landlord as $hostel)
                        <tr>
                            <td>{{$hostel->hname}}</td>
                            <td>{{$hostel->hregion}}</td>
                            <td>{{$hostel->address}}</td>
                            <td><a href="{{url('/registerhostelrooms/'.$hostel->id)}}" class="btn btn-success">Add Room</a> </td>
                            <td><a href="" class="btn btn-info">Edit</a> </td>
                            <td><a href="" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table></center>
            </div>
                @endif
            @else
            <section class="row" id="mainBody">
                <div class="col-md-6" id="welcomeDiv">
                    <h4>Welcome to Diaspora Room Booking Web Application</h4>
                    <p style="color: #000000;">Diaspora Room Booking is a system built to assist students who are seeking for housing outside the Egerton University Compound. The process of booking hostels in the "diaspora"
                        of Egerton University is usually a hectic process involving taking physical tours, taking relative hostel management and eventually booking of the hostels that consumes a lot of resources in respect
                        to time and money. The Diaspora Room Booking System simplifies the whole process in that you can get to tour hostels virtually, get direction to respective hostels if you want to take a physical
                        tour, communicate with the relative hostel management and eventually book the hostel. The System is also an adversing platform as it helps Hostel Owners advertise their hostels to the students in a
                        venue surely gets the message to the intended audience.<br><br>
                        IN SHORT THE SYSTEM BRIDGES GULFS
                    </p>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-5" id="newsLetter">
                    <center><img src="{{url('images/user.jpg')}}">
                        <h4>Contact Web App Administrator</h4>
                    </center>
                    <form class="form-horizontal" role="form" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 name" >
                                <input style="border: 1px solid #222222;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email-Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 message" >
                                <input style="border: 1px solid #222222;" id="message" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Your Message" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4" style="padding-left: 70px;">
                                <button type="submit" class="btn" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 160px;">
                                    <strong>Submit <i class="fa fa-paper-plane"></i></strong>
                                </button><br>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-8" id="leftDiv">

                </div>

                <div class="col-md-1"></div>

                <div class="col-md-3" id="rightDiv">
                    <center><h5>Administator Direct Contact Details</h5></center>
                    <p style="color: #000000">Phone Number: +(254) 705715657</p>
                    <p style="color: #000000"><i class="fa fa-whatsapp"></i> :  +(254) 705715657</p>
                    <p style="color: #000000"><i class="fa fa-facebook"></i> : Tobin Karioki</p>
                    <p style="color: #000000"><i class="fa fa-google"> :  tobinkarioki@gmail.com</i></p>
                </div>
            </section>

            @endif
        </div>
    </div>

        @include('sidenav')

        <script src="{{url('js/jquery.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/diaspora.js')}}"></script>
    </body>
</html>