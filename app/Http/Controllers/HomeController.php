<?php

namespace App\Http\Controllers;

use App\ApproveBookings;
use App\BookRoom;
use App\ContactLandlord;
use App\HostelRooms;
use App\User;
use App\Reply;
use Illuminate\Http\Request;
use App\Hostel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        /*$get =  BookRoom::where('landlord_id', Auth::user()->id)->get();
        dd($get);
        View::share("get", $get);*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$app = ApproveBookings::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();*/
        return view('index');
    }

    public function hostel(){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        /*dd($hostels);*/
        $get =  BookRoom::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $app = ApproveBookings::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $message = ContactLandlord::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $reply = Reply::where('user_id', Auth::user()->id)->get();
        /*dd($reply[0]);*/
        return view('index', compact('hostels', 'get', 'message', 'reply', 'app'));
    }

    public function acknowledge($hostel_id, $room_id, $book_id){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        $get =  BookRoom::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $app = ApproveBookings::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $hostel = Hostel::findorFail($hostel_id);
        $message = ContactLandlord::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $reply = Reply::where('user_id', Auth::user()->id)->get();
        $gets =  HostelRooms::findorFail($room_id);
        $ret = BookRoom::findorFail($book_id);
        return view('ackBooking', compact('hostels', 'hostel', 'gets','ret', 'get', 'message', 'reply', 'app'));
    }

    public function message($hostel_id, $message_id, $user_id){
        $hostels = Hostel::where('landlord_id', Auth::user()->id)->get();
        $get = BookRoom::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $app = ApproveBookings::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $message = ContactLandlord::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        /*dd($message);*/
        $hostel = Hostel::findorFail($hostel_id);
        $landlord = $hostel['landlord_id'];
        $details = User::findorFail($landlord);
        $messages = ContactLandlord::findorFail($message_id);
        $reply = ContactLandlord::where('user_id', Auth::user()->id)->get();
        $mwenyewe = User::findorFail(Auth::user()->id);
        $mwenyeji = $mwenyewe['id'];
        $text = DB::select('select * from contact_landlords where user_id=? and landlord_id=? or user_id=? and landlord_id=?', [$user_id, $mwenyeji, $mwenyeji, $user_id]);
        /*dd($text);*/
        return view('messageLandlord', compact('hostels', 'hostel', 'messages', 'get', 'message', 'mwenyewe', 'reply', 'details', 'text', 'app'));
    }

    public function store(Request $request)
    {
        //save user to db
        $message = new ContactLandlord($request->all());
        $message['fname'] = Auth::user()->fname;
        $message['lname'] = Auth::user()->lname;
        $message['email'] = Auth::user()->email;
        $message['pnumber'] = Auth::user()->p_number;
        $message['user_id'] = Auth::user()->id;
        $message['landlord_id'] = $request->user_id;
        $message['message'] = $request->message;
        $message['hostel_id'] = $request->hostel_id;
        $message->save();

        //return success message to page
        return redirect()->action('HomeController@message', [$request->hostel_id,$request->message_id,$request->user_id])
            ->with('status', $request->fname.' '.$request->lname.' successfully sent reply.');
    }

    public function update($hostel_id, $room_id, $book_id){
        $hostel = Hostel::findorFail($hostel_id);
        $ret = BookRoom::findorFail($book_id);
        $gets =  HostelRooms::findorFail($room_id);
        $update = DB::update('update hostel_rooms set status = 1 where id = ? and hostel_id=?', [$room_id, $hostel_id]);
        return view('ackBooking', compact('update', 'ret', 'gets', 'hostel'));
    }

    public function approve(Request $request){
        $approve = new ApproveBookings($request->all());
        $approve['fname'] = Auth::user()->fname;
        $approve['lname'] = Auth::user()->lname;
        $approve['email'] = Auth::user()->email;
        $approve['pnumber'] = Auth::user()->p_number;
        $approve['landlord_id'] = Auth::user()->id;
        $approve['user_id'] = $request->user_id;
        $approve['room_id'] = $request->room_id;
        $approve['hostel_id'] = $request->hostel_id;
        $approve['book_id'] = $request->book_id;
        $approve['status'] = 1;
        $approve->save();

        return redirect()->action('HomeController@update', [$request->hostel_id,$request->room_id,$request->book_id])
        ->with('habari', 'Booking Request has been approved');
    }

    public function decline(Request $request){
        $decline = new ApproveBookings($request->all());
        $decline['fname'] = Auth::user()->fname;
        $decline['lname'] = Auth::user()->lname;
        $decline['email'] = Auth::user()->email;
        $decline['pnumber'] = Auth::user()->p_number;
        $decline['landlord_id'] = Auth::user()->id;
        $decline['user_id'] = $request->user_id;
        $decline['room_id'] = $request->room_id;
        $decline['hostel_id'] = $request->hostel_id;
        $decline['book_id'] = $request->book_id;
        $decline['status'] = 0;
        $decline->save();

        return redirect()->action('HomeController@acknowledge', [$request->hostel_id,$request->room_id,$request->book_id])
        ->with('message', 'Booking Request has been declined');
    }
}
