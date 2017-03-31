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
            <a href="{{url('/home')}}" class="navbar-brand" style="padding-right: 130px;"><b style="font-size: 30px;">d</b>iaspora <b style="font-size: 30px">r</b>oom <b style="font-size: 30px">b</b>ooking</a>
        </div>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-right">
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
            </ul>
        </div>
    </div>
</nav>
