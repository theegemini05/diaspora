<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diaspora Room Booking | Landing Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{url('/css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('/css/sidenav.css')}}">

    <link rel="icon" href="{{url('images/eger.png')}}">
    <!-- Theme CSS -->
    <link href="css/diaspora.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <style>
        body {
            background-image: url("{{url('images/paint.jpg')}}");
            color: #fed136;
        }
    </style>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
@extends('hav')

<!-- Header -->
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
                <form name="sentMessage" id="contactForm" method="post" action="{{url('/contactadmin')}}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <center><input type="text" class="form-control name" placeholder="Your Name" id="name" required data-validation-required-message="Please enter your name." name="name"></center>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <center><input type="email" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address." name="email"></center>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <center><input type="tel" class="form-control" placeholder="Your Phone" id="phone" required data-validation-required-message="Please enter your phone number." name="p_number"></center>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <center><textarea class="form-control" placeholder="Your Message" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea></center>
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


<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->

<!-- Po

<!-- Portfolio Modal 4 -->
@include('sidenav')
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</body>

</html>
