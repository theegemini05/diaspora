<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/10/2017
 * Time: 12:12 AM
 */

namespace App\Http\Controllers;

use App\ApprovedBooking;
use App\RegisterHostel;
use App\RegisterHostelRooms;
use Illuminate\Http\Request;
use App\BookedRooms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BookController extends Controller
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
    }

    public function index($hostel_id, $room_id)
    {
        $hostel = RegisterHostel::findorFail($hostel_id);
        $book= RegisterHostelRooms::findorFail($room_id);
        $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
/*        dd($book, $hostel);*/
        return view('book', compact('book', 'hostel', 'app'));
    }

    public function store(Request $request)
    {
        /*$request['room_id'] = room_id;*/

/*        $hostel = new HostelRooms($request->all());*/

        //save user to db
        $room = new BookedRooms($request->all());
        $room['fname'] = Auth::user()->fname;
        $room['lname'] = Auth::user()->lname;
        $room['email'] = Auth::user()->email;
        $room['pnumber'] = Auth::user()->p_number;
        $room['user_id'] = Auth::user()->id;
        $room['room_id'] = $request->room_id;
        $room['hostel_id'] = $request->hostel_id;
        $room->save();

        //return success message to page
        return redirect()->action('BookController@index', [$request->hostel_id, $request->room_id])
            ->with('status', $request->fname.' '.$request->lname.' successfully submitted booking_request to the system.');
    }
}