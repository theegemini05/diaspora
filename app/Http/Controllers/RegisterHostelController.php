<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/13/2017
 * Time: 10:04 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class RegisterHostelController extends Controller
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

    public function index()
    {
        $hostels = Hostel::all();
        dd($hostels);
    }

    public function create()
    {
        return view('registerHostel');
    }

    public function store(Request $request)
    {
        $request['landlord_id'] = Auth::user()->id;

        //save user to db
        $hostel = new Hostel($request->all());
        $hostel->save();

        //return success message to page
        return redirect()->action('RegisterHostelController@create')
            ->with('status', $request->hname.' Successfully Registered to the System as Hostel.')
            ->with('newHostel', $hostel);
    }

    public function hostel(){
        $hostels = Hostel::where('landlord_id', Auth::user()->id);
        return view('landlord', compact('hostels'));
    }
}