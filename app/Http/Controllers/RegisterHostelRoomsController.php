<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/13/2017
 * Time: 10:56 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HostelRooms;
use App\Hostel;
use Illuminate\Support\Facades\View;

class RegisterHostelRoomsController extends Controller
{
    public function __construct()
    {
        $njokerio = Hostel::where("hregion","Njokerio");
        View::share("njokerio", $njokerio);
        $right = Hostel::where("hregion", "Right");
        View::share("right", $right);
        $booster = Hostel::where("hregion", "Booster");
        View::share("booster", $booster);
        $carwash = Hostel::where("hregion", "Carwash");
        View::share("carwash", $carwash);
    }

    public function create($hostel_id, $hostel_name)
    {
        $hostel = Hostel::findorFail($hostel_id);
        return view('registerHostelRooms', compact('hostel'));
    }

    public function store(Request $request)
    {
        $request['hostel_id'] =

        //save user to db
        $hostelrooms = new HostelRooms($request->all());
        $hostelrooms->save();

        //return success message to page
        return redirect()->action('RegisterHostelController@create')
            ->with('status', $request->rno.' Successfully Registered to the System as a room.')
            ->with('newHostelRooms', $hostelrooms);
    }
}