<?php

namespace App\Http\Controllers;

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
        /*$region = Hostel::where('id', 1)->get();
        $reg = $region['hname'];
        dd($reg)*/;
        return view('index', compact('hostels'));
    }
}
