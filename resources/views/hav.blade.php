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
                                                <li><a class="hders" href="{{url('/registerhostel')}}">Register Hostel</a></li>
                                            </ul>
                                            <ul class="col-md-6 list-unstyled places">
                                                <li><a class="hders" href="{{url('/registerhostelrooms')}}">Register Hostel_Room</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endif

                @if(!Auth::guest()  && Auth::user()->role == 'Landlord')
                        <li class="dropdown yamm-fw">
                        </li>
                @else
                    <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-puzzle-piece"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <ul class="col-lg-12 list-unstyled">
                                        <li class="head"><h1 style="text-align: center; border-bottom: 2px solid #fed136;"><strong>diaspora hostels at egerton university njoro</strong></h1></li>
                                    </ul>
                                    <ul class="col-md-3 list-unstyled places">
                                        <li><a class="hders" onclick="openNavAboutNjokerio()">Njokerio Region</a></li>
                                    </ul>

                                    <ul class="col-md-3 list-unstyled places">
                                        <li><a class="hders" onclick="openNavAboutRight()">Right Region</a></li>
                                    </ul>

                                    <ul class="col-md-3 list-unstyled places">
                                        <li><a class="hders" onclick="openNavAboutBooster()">Booster Region</a></li>
                                    </ul>

                                    <ul class="col-md-3 list-unstyled places">
                                        <li><a class="hders" onclick="openNavAboutCarWash()">Carwash Region</a></li>
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
                                        <ul class="col-lg-12 list-unstyled places">
                                        </ul>
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
                                            <a class="hders" style="text-decoration: none;" href="{{ url('/logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout {{ Auth::user()->lname }} <i class="fa fa-sign-out"></i>
                                            </a>

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
