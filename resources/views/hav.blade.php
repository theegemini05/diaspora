<nav class="navbar yamm navbar-inverse navbar-custom navbar-fixed-top" role="navigation"
     xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if(Auth::guest())
                <a href="{{url('/')}}" class="navbar-brand" style="padding-right: 130px;"><b style="font-size: 30px;">d</b>iaspora <b style="font-size: 30px">r</b>oom <b style="font-size: 30px">b</b>ooking</a>
            @else
                <a href="{{url('/home')}}" class="navbar-brand" style="padding-right: 130px;"><b style="font-size: 30px;">d</b>iaspora <b style="font-size: 30px">r</b>oom <b style="font-size: 30px">b</b>ooking</a>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::guest())
                    @if(Auth::user()->role  == 'Landlord' && Auth::user()->active == '1')
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                landlord_priviledges<i class="fa fa-key"></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-lg-12 list-unstyled places">
                                                <li class="head"><h1 style="text-align: center; border-bottom: 2px solid #fed136;">landlord {{ Auth::user()->lname }} priviledges</h1></li>
                                            </ul>
                                            <ul class="col-md-6 list-unstyled places">
                                                <center><li><a class="hders" href="{{url('home/registerhostel')}}">Register Hostel</a></li></center>
                                            </ul>
                                            <ul class="col-md-6 list-unstyled places">
                                                <center><li><a class="hders" href="{{url('/home/vacaterooms')}}">Vacate Rooms</a></li></center>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endif

                @if(!Auth::guest() && Auth::user()->role == 'Landlord')
                        <li class="dropdown yamm-fw">
                        </li>
                @else
                    <li class="dropdown yamm-fw">
                        <a href="{{url('#')}}" class="dropdown-toggle" data-toggle="dropdown">Take A Tour <i class="fa fa-street-view"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <ul class="col-lg-12 list-unstyled">
                                            <li class="head"><h1 style="text-align: center;border-bottom: 2px solid #fed136;"><strong>tour hostels at egerton university njoro, diaspora</strong></h1></li>
                                        </ul>
                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavTourNjokerio()">Njokerio Region</a></li>
                                        </ul>

                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavTourRight()">Right Region</a></li>
                                        </ul>

                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavTourBooster()">Booster Region</a></li>
                                        </ul>

                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavTourCarWash()">Carwash Region</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(!Auth::guest() && Auth::user()->role == 'Landlord')
                        <li class="dropdown yamm-fw">
                        </li>
                @else
                    <li class="dropdown yamm-fw">
                        <a href="{{url('#')}}" class="dropdown-toggle" data-toggle="dropdown">Contact <i class="fa fa-mobile"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <ul class="col-lg-12 list-unstyled">
                                            <li class="head"><h1 style="text-align: center;border-bottom: 2px solid #fed136;"><strong>reach out to hostels at egerton university njoro, diaspora</strong></h1></li>
                                        </ul>
                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavContactNjokerio()">Njokerio Region</a></li>
                                        </ul>

                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavContactRight()">Right Region</a></li>
                                        </ul>

                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavContactBooster()">Booster Region</a></li>
                                        </ul>

                                        <ul class="col-md-3 list-unstyled places">
                                            <li><a class="hders" onclick="openNavContactCarWash()">Carwash Region</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (Auth::guest())
                    <li class="dropdown yamm-fw">
                    </li>
                @else
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            notifications <i class="fa fa-ravelry"></i>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                    @if(isset($get))
                                        @if(!Auth::guest() && Auth::user()->role == "Landlord" || !Auth::user()->active == 2)
                                        @foreach($get as $notify)
                                        <ul class="col-lg-12 list-unstyled places">
                                            @if($notify->landlord_id == Auth::user()->id)
                                                <center><li class="messages"><a class="hders" style="font-size: 15px;" href="{{url('/home/ackbooking/'.$notify->hostel_id.'/'.$notify->room_id.'/'.$notify->id)}}">{{$notify->fname}} {{$notify->lname}} sent a booking request<i style="margin-left: 520px;">{{$notify->created_at}}</i></a></li></center>
                                                @else
                                                <li></li>
                                                @endif
                                        </ul>
                                            @endforeach
                                            @endif
                                    @else
                                        <div></div>
                                    @endif

                                    @if(isset($app))
                                            @if(!Auth::guest() && Auth::user()->role == "Client")
                                                @foreach($app as $rove)
                                                    <ul class="col-lg-12 list-unstyled places">
                                                        @if($rove->user_id == Auth::user()->id)
                                                            @if($rove->status == 1)
                                                            <center><li class="approved"><a class="hders" style="font-size: 15px;" href="{{url('/home/acceptroom/'.$rove->hostel_id.'/'.$rove->room_id.'/'.$rove->book_id.'/'.$rove->id)}}">{{$rove->fname}} {{$rove->lname}} approved your booking request<i style="margin-left: 520px;">{{$rove->created_at}}</i></a></li></center>
                                                            @else
                                                                <center><li class="declined"><a class="hders" style="font-size: 15px;" href="{{url('/tour/'.$rove->hostel_id)}}">{{$rove->fname}} {{$rove->lname}} declined your booking request<i style="margin-left: 520px;">{{$rove->created_at}}</i></a></li></center>
                                                            @endif
                                                        @else
                                                            <li></li>
                                                        @endif
                                                    </ul>
                                                @endforeach
                                            @endif
                                    @else
                                            <div></div>
                                    @endif
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                    @if (Auth::guest())
                        <li class="dropdown yamm-fw">
                        </li>
                    @else
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                messages <i class="fa fa-comments"></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            @if(isset($message))
                                                {{--@if(!Auth::guest() && Auth::user()->role == "Landlord")--}}
                                                    @foreach($message as $send)
                                                        <ul class="col-lg-12 list-unstyled places">
                                                            @if($send->landlord_id == Auth::user()->id)
                                                                <center><li class="messages"><a class="hders" style="font-size: 15px;" href="{{url('/home/messagelandlord/'.$send->hostel_id.'/'.$send->id.'/'.$send->user_id)}}">{{$send->fname}} {{$send->lname}} sent a message<i style="margin-left: 620px;">{{$send->created_at}}</i></a></li></center>
                                                            @else
                                                                <li></li>
                                                            @endif
                                                        </ul>
                                                    @endforeach
                                                {{--@endif--}}
                                            @endif

                                                @if(isset($adminchat))
                                                    {{--@if(!Auth::guest() && Auth::user()->role == "Landlord")--}}
                                                    @foreach($adminchat as $chat)
                                                        <ul class="col-lg-12 list-unstyled places">
                                                            @if(Auth::user()->active == 2)
                                                                <center><li class="messages"><a class="hders" style="font-size: 15px;" href="{{url('/home/messagelandlord/'.$chat->id)}}">{{$chat->name}} sent a message<i style="margin-left: 620px;">{{$chat->created_at}}</i></a></li></center>
                                                            @else
                                                                <li></li>
                                                            @endif
                                                        </ul>
                                                    @endforeach
                                                    {{--@endif--}}
                                                @endif
                                            {{--@if(isset($reply))
                                                @if(!Auth::guest() && Auth::user()->role == "User")
                                                    @foreach($reply as $ripoti)
                                                        <ul class="col-lg-12 list-unstyled places">
                                                            @if($ripoti->user_id == Auth::user()->id)
                                                                <center><li><a class="hders" style="font-size: 15px;" href="{{url('/home/messagelandlord/'.$ripoti->hostel_id.'/'.$ripoti->id)}}">{{$ripoti->fname}} {{$ripoti->lname}} sent a message</a></li></center>
                                                            @else
                                                                <li></li>
                                                            @endif
                                                        </ul>
                                                    @endforeach
                                                @endif
                                            @endif--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @endif


                @if (Auth::guest())
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">user <i class="fa fa-user-o"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                     <div class="yamm-content">
                                         <div class="row">
                                             <ul class="col-lg-6 list-unstyled places">
                                                 <li><a class="hders" href="{{url('/login')}}">already registered. <i class="fa fa-sign-in"></i></a></li>
                                             </ul>
                                             <ul class="col-lg-6 list-unstyled places">
                                                 <li><a class="hders" href="{{url('/register')}}">new to diaspora? <i class="fa fa-user-plus"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                </li>
                            </ul>
                    </li>
                @else
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->lname}} <i class="fa fa-user-o"></i>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <ul class="col-lg-12 list-unstyled places">
                                            <center><li><a class="hders" style="text-decoration: none;" href="{{ url('/logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout {{ Auth::user()->lname }} <i class="fa fa-sign-out"></i>
                                                    </a></li></center>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form></ul></div></div>

                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
