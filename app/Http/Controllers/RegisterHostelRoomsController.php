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

class RegisterHostelRoomsController extends Controller
{
    public function index()
    {
        $hostelrooms = HostelRooms::all();
        //dd($users);

        return view('registerHostelRooms.all', compact('registerHostelRooms'));
    }

    public function create()
    {
        return view('registerHostelRooms');
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