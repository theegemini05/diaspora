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

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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
            <br><br>
            <div class="col-md-8">
                 <h3 style="color: #fed136;">Send a Message to Landlord {{$gets->hname}}</h3>
                 <form role="form" method="POST" action="{{ url('/contactlandlord') }}">
                     {{ csrf_field() }}

                     @if (session('status'))
                         <div class="alert alert-success">
                             <button type="button" class="close" data-dismiss="alert">&times;</button>
                             <strong><center>{{ session('status') }}</center></strong>
                         </div>
                     @endif
                     <input type="hidden" name="fname" value="{{$user->fname}}">
                     <input type="hidden" name="lname" value="{{$user->lname}}">
                     <input type="hidden" name="email" value="{{$user->email}}">
                     <input type="hidden" name="pnumber" value="{{$user->p_number}}">
                     <input type="hidden" name="user_id" value="{{$user->id}}">
                     <input type="hidden" name="landlord_id" value="{{$gets->landlord_id}}">
                     <input type="hidden" name="hostel_id" value="{{$gets->id}}">
                     {{--<div class="form-group control-group">
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
                     </div>--}}

                     <div class="form-group control-block">
                         <div class="controls contact message">
                             <textarea style="border: 1px solid #fed136; width: 750px;" rows="10" cols="100" name="message" class="form-control" id="message" required data-validation-required-message="Please enter your message." maxlength="999" style="resize:none" placeholder="Write Down Your Message Here"></textarea>
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