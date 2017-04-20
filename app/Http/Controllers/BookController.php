<?php
/**
 * Created by PhpStorm.
 * User: m
 * Date: 4/10/2017
 * Time: 12:12 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookRoom;

class BookController extends Controller
{
    public function index()
    {
        $book = BookRoom::all();
        //dd($users);

        return view('book.all', compact('book'));
    }

    public function create()
    {
        return view('book');
    }

    public function store(Request $request)
    {
        $request['user_id'] = 1;
        $request['room_id'] = 1;

        //dd($request->all());

        //save user to db
        $room = new BookRoom($request->all());
        $room->save();

        //return success message to page
        return redirect()->action('BookController@create')
            ->with('status', $request->fname.' Successfully Submitted Booking_Request to the System.')
            ->with('newBookRoom', $room);
    }
}