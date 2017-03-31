<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('/css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('/css/diaspora.css')}}">

    <link rel="stylesheet" href="{{url('/css/sidenav.css')}}">

    <link rel="icon" href="{{url('images/eger.png')}}">

    <title>Diaspora Room Booking</title>

    <style>
        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }
    </style>
</head>

<body>
@include('hav')
<div id="main">
    <div class="container" style="padding-top: 60px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color: #fff; border-bottom: 1px solid #fed136;">contact
                    <small style="color: #fed136;"><b style="font-size: 30px;">2</b> <b style="font-size: 30px;">f</b>or <b style="font-size: 30px;">3</b> <b style="font-size: 30px;">c</b>arwash </small>
                </h1>

                <ol class="breadcrumb" style="background-color: #222222">
                    <li><a href="/home" style="color: #fed136;">home</a></li>
                    <li class="active" style="color: white">contact_2_for_3</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                @include('contactCarousel')
            </div>

            <div class="col-md-4" style="color: #fed136;">
                <h3 style="border-bottom: 1px solid #fed136;"><b style="font-size: 30px">c</b>ontact <b style="font-size: 30px;">2</b> <b style="font-size: 30px;">f</b>or <b style="font-size: 30px;">3</b></h3>
                <p>Egerton 867-40200</p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (+254) 700000000
                </p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email Address">E</abbr>: <a style="color: #fed136;" href="mailto:2for3@gmail.com">2for3@gmail.com</a>
                </p>

                <ul class="list-unstyled list-inline list-social-icons">
                    <li><a style="color: #fed136;" href="{{url('#')}}"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                    <li><a style="color: #fed136;" href="{{url('#')}}"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                    <li><a style="color: #fed136;" href="{{url('#')}}"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                    <li><a style="color: #fed136;" href="{{url('#')}}"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a style="color: #fed136;" href="{{url('#')}}"><i class="fa fa-snapchat fa-2x"></i></a></li>
                    <li><a style="color: #fed136;" href="{{url('#')}}"><i class="fa fa-whatsapp fa-2x"></i></a></li>
                </ul>
            </div>
        </div><br><br><br>

        <div class="row">
            <div class="col-md-8">
                <h3 style="color: #fed136;">Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="form-group control-group">
                        <div class="controls contact name">
                            <input style="border: 1px solid #fed136;" type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Enter Your Name(s)">
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="form-group control-group">
                        <div class="controls contact phone">
                            <input style="border: 1px solid #fed136" type="text" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="Enter Your Phone Number(s)">
                        </div>
                    </div>

                    <div class="form-group control-group">
                        <div class="controls contact email">
                            <input style="border: 1px solid #fed136" type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Enter Your Email-Address">
                        </div>
                    </div>

                    <div class="form-group control-block">
                        <div class="controls contact message">
                            <textarea style="border: 1px solid #fed136;" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message." maxlength="999" style="resize:none" placeholder="Write Down Your Message Here"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>

                    <button style="background-color: #fed136;color: #222222;border: 2px solid #222222;" type="submit" class="btn">Send Message <i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div><br><br><br>

        @include('footer')
    </div></div>

@include('sidenav')

<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</body>
</html>