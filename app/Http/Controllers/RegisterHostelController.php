<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/13/2017
 * Time: 10:04 AM
 */

namespace App\Http\Controllers;

use App\RegisterHostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class RegisterHostelController extends Controller
{
    public function __construct()
    {
        $njokerio = RegisterHostel::where("hregion","Njokerio")->get();
        View::share("njokerio", $njokerio);
        $right = RegisterHostel::where("hregion", "Right")->get();
        View::share("right", $right);
        $booster = RegisterHostel::where("hregion", "Booster")->get();
        View::share("booster", $booster);
        $carwash = RegisterHostel::where("hregion", "Carwash")->get();
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
            'pics' => 'mimes:jpeg,jpg,png|max:20000',
            'lat' => 'required',
            'lng' => 'required',
        ]);
        //save user to db
        $hostel = new RegisterHostel($request->all());
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
            ->with('status', $request->hname.' Successfully Registered to the System as Hostel.');
    }

}