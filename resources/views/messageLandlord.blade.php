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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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

    <div class="container" style="margin-top: 100px; color: #fed136; text-align: left; font-size: 20px;>
        <div class="row">
    <div class="col-lg-12">
        @if(!Auth::guest() && Auth::user()->role == "Landlord")
        <h3>MESSAGES::{{$messages->fname}} {{$messages->lname}}--{{$messages->email}}--{{$messages->pnumber}}</h3>
        @endif
        @if(!Auth::guest() && Auth::user()->role == "User")
           <h3>MESSAGES::{{$details->fname}} {{$details->lname}}--{{$details->email}}--{{$details->p_number}}</h3>
        @endif

        {{--@if($messages->user_id == Auth::user()->id)--}}

            @foreach($text as $item)
                @if($item->user_id == Auth::user()->id)
                <div class="right">
                <h4 style="color: #FFFFFF; font-size: 12px;">You</h4>
                <div class="row">
                    <div class="col-lg-3" style="background-color: rgba(242, 242, 242, 0.4); box-shadow: 10px 10px 5px rgba(254, 209, 54, 0.4); border-radius: 10px; font-size: 18px; color: #000000; width: 300px;">
                        {{$item->message}}<br>
                        <i style="font-size: 12px;">{{$item->created_at}}</i>
                    </div>
                </div><br>
                </div>
                @else
                    <div class="left">
                            <h4 style="color: #FFFFFF; font-size: 12px;">{{$item->lname}}</h4>
                            <div class="row">
                                <div class="col-lg-3" style="background-color: rgba(254, 209, 54, 0.4); box-shadow: 10px 10px 5px rgba(242, 242, 242, 0.4); border-radius: 10px; font-size: 18px; color: #000000; width: 300px;">
                                    {{$item->message}}<br>
                                    <i style="font-size: 12px;">{{$item->created_at}}</i>
                                </div>
                            </div><br>
                    </div>
                @endif
            @endforeach

        {{--@endif--}}
        {{--@if()
            <div class="left">
                @foreach($text as $take)
                    <h4 style="color: #FFFFFF; font-size: 12px;">{{$hostel->hname}} Hostels</h4>
                    <div class="row">
                        <div class="col-lg-3" style="background-color: rgba(254, 209, 54, 0.4); box-shadow: 10px 10px 5px rgba(242, 242, 242, 0.4); border-radius: 10px; font-size: 18px; color: #000000; width: 300px;">
                            {{$text->message}}<br>
                            <i style="font-size: 12px;">{{$text->created_at}}</i>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif--}}

        {{--<div class="row reply" >
            <div class="col-lg-3" style="background-color: rgba(254, 209, 54, 0.4); box-shadow: 10px 10px 5px rgba(242, 242, 242, 0.4); border-radius: 10px; font-size: 18px; color: #000000; width: 300px;">
                {{$ripoti->message}}<br>
                <i style="font-size: 12px;">{{$ripoti->created_at}}</i>
            </div>
        </div>--}}

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ url('/messagelandlord') }}">

                    {{ csrf_field() }}

                    {{--@if (session('status'))
                        <div class="alert alert-success" style="font-size: 12px; border-top: 15px;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><center>{{ session('status') }}</center></strong>
                        </div>
                    @endif--}}
                    <input type="hidden" name="fname" value="{{$mwenyewe->fname}}">
                    <input type="hidden" name="lname" value="{{$mwenyewe->lname}}">
                    <input type="hidden" name="email" value="{{$mwenyewe->email}}">
                    <input type="hidden" name="pnumber" value="{{$mwenyewe->p_number}}">
                    <input type="hidden" name="user_id" value="{{$messages->user_id}}">
                    <input type="hidden" name="hostel_id" value="{{$messages->hostel_id}}">
                    <input type="hidden" name="message_id" value="{{$messages->id}}">
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

                    <div class="form-group{{ $errors->has('ripoti') ? ' has-error' : '' }}">
                        <div class="col-md-9 message" style="padding-left: 0;">
                            <input style="border: 1px solid #fed136; width: 872px;" id="message" type="text" class="form-control" name="message" value="{{ old('message') }}" placeholder="Enter your message" required autofocus>

                            @if ($errors->has('ripoti'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <center><button class="btn btn-lg btn-success" type="submit" style="width: 250px;">Send Reply<i class="fa fa-paper-plane"></i></button></center>
                </form>
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