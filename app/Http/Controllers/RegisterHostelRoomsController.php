<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/13/2017
 * Time: 10:56 AM
 */

namespace App\Http\Controllers;

use App\ApprovedBooking;
use App\RegisterHostel;
use App\RegisterHostelRooms;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\HostelRooms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class RegisterHostelRoomsController extends Controller
{
    public function __construct()
    {
        $njokerio = RegisterHostel::where("hregion", "Njokerio")->get();
        View::share("njokerio", $njokerio);
        $right = RegisterHostel::where("hregion", "Right")->get();
        View::share("right", $right);
        $booster = RegisterHostel::where("hregion", "Booster")->get();
        View::share("booster", $booster);
        $carwash = RegisterHostel::where("hregion", "Carwash")->get();
        View::share("carwash", $carwash);
    }

    public function create($hostel_id)
    {
        $hostel = RegisterHostel::findorFail($hostel_id);
        return view('registerHostelRooms', compact('hostel'));
    }

    public function store(Request $request)
    {
        /*$this->validate($request, [
            //'rno' => 'required|number',
            'pics' => 'mimes:jpeg,jpg,png|max:10000'
        ]);
        //save user to db
        $hostelrooms = new HostelRooms($request->all());
        if ($request->pics != null) {
            $file = Input::file('pics');

            $originname = $file->getClientOriginalName();

            $filename = pathinfo($originname, PATHINFO_FILENAME);
            $extension = pathinfo($originname, PATHINFO_EXTENSION);
            $name = $filename . '.' . time() . '.' . $extension;

            Input::file('pics')->move(public_path() . '/photos/', $name);
        }*/
        /*$hostelrooms['pics'] = $name;*/
        $hostelrooms = new RegisterHostelRooms($request->all());
        $hostelrooms->save();

        //return success message to page
        return redirect()->action('RegisterHostelRoomsController@create', $request->hostel_id)
            ->with('status', $request->rno . ' Successfully Registered to the System as a room.');
    }

    public function tour($hostel_id)
    {
        $hostel = RegisterHostel::findorFail($hostel_id);
        $hostel['rooms'] = RegisterHostelRooms::where('hostel_id', $hostel_id)->get();
        $roomdetails = RegisterHostelRooms::where('hostel_id', $hostel_id)->get();
        if(!Auth::guest()){
            $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        }
        return view('tour', compact('hostel', 'app', 'roomdetails'));
    }

    public function about($hostel_id)
    {
        $hostel = RegisterHostel::findorFail($hostel_id);
        $hostel['rooms'] = RegisterHostelRooms::where('hostel_id', $hostel_id)->get();
        if(!Auth::guest()){
            $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        }
        $get = $hostel['landlord_id'];
        $ret = User::findorFail($get);
        /*return Response::json($hostel);*/
        /*dd($hostel);*/
        return view('about', compact('hostel', 'ret', 'app'));
    }

    public function contact($hostel_id)
    {
        $hostel = RegisterHostel::findorFail($hostel_id);
        $hostel['rooms'] = RegisterHostelRooms::where('hostel_id', $hostel_id)->get();
        if(!Auth::guest()){
            $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        }
        $get = $hostel['landlord_id'];
        $ret = User::findorFail($get);
        /*return Response::json($hostel);*/
        /*dd($hostel);*/
        return view('contact', compact('hostel', 'ret', 'app'));
    }
}