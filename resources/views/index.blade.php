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
            @if( isset($hostels))
                @if(Auth::user()->active == 1)
            <div class="col-md-12" id="mainBody">
                <center><h2 style="border-bottom: 1px solid #fed136; margin-bottom: 30px; ">{{Auth::user()->lname}} Hostels</h2></center>
                <center><table id="hostels">
                    <thead>
                    <tr>
                        <th>Hostel Name</th>
                        <th>Hostel Region</th>
                        <th>Hostel Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hostels as $hostel)
                        <tr>
                            <td>{{$hostel->hname}}</td>
                            <td>{{$hostel->hregion}}</td>
                            <td>{{$hostel->address}}</td>
                            <td><a {{--@if($hostel->hregion == "Njokerio")--}}
                                   href="{{url('home/registerhostelrooms/'.$hostel->id)}}"
                                  {{-- @else--}}
                                           {{--href="{{url('1')}}"--}}
                                  {{-- @endif --}}class="btn btn-success">Add Room</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table></center>
            </div>
                @elseif(Auth::user()->active == 2)
                    <div class="col-md-12" id="mainBody">
                        <div class="row">
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$count}}</h3>

                                        <p>Total Users</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <a href="{{url('/home/listusers')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$buru}}</h3>

                                        <p>Registered Hostels</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <a href="{{url('/home/listhostels')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$midways}}</h3>

                                        <p>Total Hostels Rooms</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-bed"></i>
                                    </div>
                                    <a href="{{url('/home/listhostelrooms')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$requests}}</h3>

                                        <p>Total Booking Requests</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                    <a href="{{url('/home/listbookedrooms')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$appRequests}}</h3>

                                        <p>Total Approved Requests</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <a href="{{url('/home/listapprovedrequests')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$watu}}</h3>

                                        <p>Instances of Occupancy</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <a href="{{url('/home/listoccupiedrooms')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$text}}</h3>

                                        <p>Messages Sent</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-8">
                            </div>
                            <div class="col-lg-4 col-xs-8">
                                <!-- small box -->
                                <div class="small-box" style="background-color: transparent; border: 1px solid #fed136;">
                                    <div class="inner">
                                        <h3>{{$vacates}}</h3>

                                        <p>Instances of Vacates</p>
                                    </div>
                                    <div class="icon" style="color: #fed136">
                                        <i class="fa fa-bell"></i>
                                    </div>
                                    <a href="{{url('/home/listvacated')}}" class="small-box-footer" style="background-color: #fed136; color: black;">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                @else
                    <header>
                        <div class="container">
                            <div class="intro-text">
                                <div class="intro-lead-in">Welcome To Diaspora Room Booking System!</div>
                                <div class="intro-heading">It's Nice To Have You Around</div>
                                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a><br><br>
                                <a href="#contact"  class="page-scroll btn contactbtn">Contact Diaspora</a>
                            </div>
                        </div>
                    </header>

                    {{--
                    <!-- Services Section -->
                    --}}
                    <section id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">Services</h2>
                                    <h3 class="section-subheading text-muted">Diaspora Room Booking System.</h3>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary" style="color: #fed136"></i>
                        <i class="fa fa-tachometer fa-stack-1x fa-inverse" style="color: black"></i>
                    </span>
                                    <h4 class="service-heading">Speed</h4>
                                    <p class="text-muted" style="color: white;">Offer fast preview of hostels within the area and thus saves time for you. You know they say that time is never enough</p>
                                </div>
                                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary" style="color: #fed136"></i>
                        <i class="fa fa-buysellads fa-stack-1x fa-inverse" style="color: black"></i>
                    </span>
                                    <h4 class="service-heading">Advertisement</h4>
                                    <p class="text-muted" style="color: white;">Offer landlords to hostels within the area with a platform to advertise their apartment to potential tenants of the same apartments</p>
                                </div>
                                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary" style="color: #fed136"></i>
                        <i class="fa fa-plug fa-stack-1x fa-inverse" style="color: black"></i>
                    </span>
                                    <h4 class="service-heading">Intermediary</h4>
                                    <p class="text-muted" style="color: white">Act as an intermediary between you the user and your potential landlords.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Portfolio Grid Section -->

                    <!-- Contact Section -->
                    <section id="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">Contact Us</h2>
                                    <h3 class="section-subheading text-muted">Diaspora Room Booking System Administrator.</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="sentMessage" id="contactForm" novalidate>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <center><input type="text" class="form-control name" placeholder="Your Name" id="name" required data-validation-required-message="Please enter your name."></center>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <center><input type="email" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address."></center>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <center><input type="tel" class="form-control" placeholder="Your Phone" id="phone" required data-validation-required-message="Please enter your phone number."></center>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <center><textarea class="form-control" placeholder="Your Message" id="message" required data-validation-required-message="Please enter a message."></textarea></center>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <div id="success"></div>
                                                <button type="submit" class="btn btn-xl">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    @extends('footer')
                @endif
            @else

            @endif
        </div>
    </div>

        @include('sidenav')
        <script src="{{url('js/jquery.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/diaspora.js')}}"></script>
        <script src="{{url('/js/jquery.dataTables.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('/js/Chart.js')}}" type="text/javascript"></script>
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
        <script type="text/javascript">
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        </script>
    </body>
</html>