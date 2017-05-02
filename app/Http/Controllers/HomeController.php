<?php

namespace App\Http\Controllers;

use App\BookRoom;
use App\ContactLandlord;
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
        /*dd($hostels);*/
        $get =  BookRoom::where('landlord_id', Auth::user()->id)->get();
        $message = ContactLandlord::where('landlord_id', Auth::user()->id)->get();
        /*dd($message);*/
        return view('index', compact('hostels', 'get', 'message'));
    }

    public function acknowledge($hostel_id, $room_id, $book_id){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        $get =  BookRoom::where('landlord_id', Auth::user()->id)->get();
        $hostel = Hostel::findorFail($hostel_id);
        $message = ContactLandlord::where('landlord_id', Auth::user()->id)->get();
        $gets =  HostelRooms::findorFail($room_id);
        $ret = BookRoom::findorFail($book_id);
        return view('ackBooking', compact('hostels', 'hostel', 'gets','ret', 'get', 'message'));
    }

    public function message($hostel_id, $message_id){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        $get = BookRoom::where('landlord_id', Auth::user()->id)->get();
        $message = ContactLandlord::where('landlord_id', Auth::user()->id)->get();
        $hostel = Hostel::findorFail($hostel_id);
        $messages = ContactLandlord::findorFail($message_id);
        return view('messageLandlord', compact('hostels', 'hostel', 'messages', 'get', 'message'));
    }
}
