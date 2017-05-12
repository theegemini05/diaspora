<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 5/11/2017
 * Time: 11:49 AM
 */

namespace App\Http\Controllers;

use App\ContactLandlord;
use App\Reply;
use App\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class MessageReplies extends Controller
{
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

    /*public function message($message_id){
        $get = ContactLandlord::findorFail($message_id);
        $user = User::findorFail(Auth::user()->id);
        dd($get);
        return view('messageLandlord', compact('get', 'user'));
    }*/


}