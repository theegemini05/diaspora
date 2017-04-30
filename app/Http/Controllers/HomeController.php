<?php

namespace App\Http\Controllers;

use App\BookRoom;
use App\HostelRooms;
use Illuminate\Http\Request;
use App\Hostel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
        $njokerio = Hostel::where("hregion","Njokerio")->get();
        View::share("njokerio", $njokerio);
        $right = Hostel::where("hregion", "Right")->get();
        View::share("right", $right);
        $booster = Hostel::where("hregion", "Booster")->get();
        View::share("booster", $booster);
        $carwash = Hostel::where("hregion", "Carwash")->get();
        View::share("carwash", $carwash);
        /*$get =  BookRoom::where('landlord_id', Auth::user()->id)->get();
        dd($get);
        View::share("get", $get);*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('index');
    }

    public function hostel(){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        $get =  BookRoom::where('landlord_id', Auth::user()->id)->get();
        /*dd($get);*/
        return view('index', compact('hostels', 'get'));
    }

    public function acknowledge($hostel_id, $room_id, $book_id){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        $get =  BookRoom::where('landlord_id', Auth::user()->id)->get();
        $hostel = Hostel::findorFail($hostel_id);
        $gets =  HostelRooms::findorFail($room_id);
        $ret = BookRoom::findorFail($book_id);
        return view('ackBooking', compact('hostels', 'hostel', 'gets','ret', 'get'));
    }
}
