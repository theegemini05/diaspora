<div id="mySidenav_about_njokerio" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavAboutNjokerio()">
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span> back
    </a>
    @foreach($njokerio as $hostel)
        <a href="{{url('/njokerio/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_about_right" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavAboutRight()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($right as $hostel)
        <a href="{{url('/right/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_about_booster" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavAboutBooster()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($booster as $hostel)
        <a href="{{url('/booster/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_about_carwash" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavAboutCarWash()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($carwash as $hostel)
        <a href="{{url('/carwash/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_tour_njokerio" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavTourNjokerio()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($njokerio as $hostel)
        <a href="{{url('/njokerio/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_tour_right" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavTourRight()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($right as $hostel)
        <a href="{{url('/right/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_tour_booster" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavTourBooster()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($booster as $hostel)
        <a href="{{url('/booster/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_tour_carwash" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavTourCarWash()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($carwash as $hostel)
        <a href="{{url('/carwash/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_contact_njokerio" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavContactNjokerio()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($njokerio as $hostel)
        <a href="{{url('/njokerio/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_contact_right" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavContactRighleftt()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($right as $hostel)
        <a href="{{url('/right/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_contact_booster" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavContactBooster()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($booster as $hostel)
        <a href="{{url('/booster/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>

<div id="mySidenav_contact_carwash" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavContactCarWash()">
        back
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-left"></span>
    </a>
    @foreach($carwash as $hostel)
        <a href="{{url('/carwash/hostel')}}">{{$hostel->hname}}</a>
    @endforeach
</div>