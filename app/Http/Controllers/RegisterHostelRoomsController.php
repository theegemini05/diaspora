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
use Illuminate\Support\Facades\Input;

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

    public function create($hostel_id)
    {
        $hostel = Hostel::findorFail($hostel_id);
        return view('registerHostelRooms', compact('hostel'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            //'rno' => 'required|number',
            'pics' => 'mimes:jpeg,jpg,png|max:10000'
        ]);
        //save user to db
        $hostelrooms = new HostelRooms($request->all());
        if($request->pics != null){
            $file = Input::file('pics');

            $originname = $file->getClientOriginalName();

            $filename = pathinfo($originname, PATHINFO_FILENAME);
            $extension = pathinfo($originname, PATHINFO_EXTENSION);
            $name = $filename.'.'.time().'.'.$extension;

            Input::file('pics')->move(public_path() . '/photos/', $name);
        }
        $hostelrooms['pics'] = $name;
        $hostelrooms->save();

        //return success message to page
        return redirect()->action('RegisterHostelRoomsController@create', $request->hostel_id)
            ->with('status', $request->rno.' Successfully Registered to the System as a room.')
            ->with('newHostelRooms', $hostelrooms);
    }
}