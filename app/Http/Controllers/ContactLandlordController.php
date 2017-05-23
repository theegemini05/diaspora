<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/30/2017
 * Time: 10:10 PM
 */

namespace App\Http\Controllers;

use App\ApprovedBooking;
use App\ContactedLandlord;
use App\RegisterHostel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ContactLandlordController extends Controller
{
    public function __construct()
    {
        /* $this->middleware('auth');*/
        $njokerio = RegisterHostel::where("hregion","Njokerio")->get();
        View::share("njokerio", $njokerio);
        $right = RegisterHostel::where("hregion", "Right")->get();
        View::share("right", $right);
        $booster = RegisterHostel::where("hregion", "Booster")->get();
        View::share("booster", $booster);
        $carwash = RegisterHostel::where("hregion", "Carwash")->get();
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
    public function message($hostel_id){
        $get = RegisterHostel::findorFail($hostel_id);
        $user = User::findorFail(Auth::user()->id);
        $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        /*dd($user);*/
        return view('contactLandlord', compact('get', 'user', 'app'));
    }

    public function store(Request $request)
    {
        /*$request['room_id'] = room_id;*/

        /*        $hostel = new HostelRooms($request->all());*/

        //save user to db
        $message = new ContactedLandlord($request->all());
        $message['fname'] = Auth::user()->fname;
        $message['lname'] = Auth::user()->lname;
        $message['email'] = Auth::user()->email;
        $message['pnumber'] = Auth::user()->p_number;
        $message['user_id'] = Auth::user()->id;
        $message['message'] = $request->message;
        $message['hostel_id'] = $request->hostel_id;
        $message->save();

        //return success message to page
        return redirect()->action('ContactLandlordController@message', $request->hostel_id)
            ->with('status', $request->fname.' '.$request->lname.' successfully sent message.');
    }
}