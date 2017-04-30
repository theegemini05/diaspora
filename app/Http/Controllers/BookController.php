<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/10/2017
 * Time: 12:12 AM
 */

namespace App\Http\Controllers;

use App\HostelRooms;
use Illuminate\Http\Request;
use App\BookRoom;
use App\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BookController extends Controller
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

    public function index($hostel_id, $room_id)
    {
        $hostel = Hostel::findorFail($hostel_id);
        $book= HostelRooms::findorFail($room_id);
/*        dd($book, $hostel);*/
        return view('book', compact('book', 'hostel'));
    }

    public function store(Request $request)
    {
        /*$request['room_id'] = room_id;*/

/*        $hostel = new HostelRooms($request->all());*/

        //save user to db
        $room = new BookRoom($request->all());
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