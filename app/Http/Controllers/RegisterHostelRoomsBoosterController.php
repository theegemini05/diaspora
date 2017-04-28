<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/27/2017
 * Time: 4:37 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class RegisterHostelRoomsBooster extends Controller
{
    public function __construct()
    {
        $njokerio = Hostel::where("hregion","Njokerio")->get();
        View::share("njokerio", $njokerio);
        $right = Hostel::where("hregion", "Right")->get();
        View::share("right", $right);
        $booster = Hostel::where("hregion", "Booster")->get();
        View::share("booster", $booster);
        $carwash = Hostel::where("hregion", "Carwash")->get();
        View::share("carwash", $carwash);
    }

    public function index()
    {
        //dd('hahah');
        return view('registerhostel');
    }

    public function store(Request $request)
    {
        $request['landlord_id'] = Auth::user()->id;

        $this->validate($request, [
            'hname' => 'required',
            'hregion' => 'required',
            'address' => 'required',
            'pics' => 'mimes:jpeg,jpg,png|max:10000'
        ]);
        //save user to db
        $hostel = new Hostel($request->all());
        if($request->pics != null){
            $file = Input::file('pics');

            $originname = $file->getClientOriginalName();

            $filename = pathinfo($originname, PATHINFO_FILENAME);
            $extension = pathinfo($originname, PATHINFO_EXTENSION);
            $name = $filename.'.'.time().'.'.$extension;

            Input::file('pics')->move(public_path() . '/photos/', $name);
        }
        $hostel['pics'] = $name;
        $hostel->save();

        //return success message to page
        return redirect()->action('RegisterHostelController@index')
            ->with('hname', $request->hname.' Successfully Registered to the System as Hostel.')
            ->with('newHostel', $hostel);
    }
}