<?php

namespace App\Http\Controllers;

use App\ApprovedBooking;
use App\BookedRooms;
use App\ContactedLandlord;
use App\RegisterHostel;
use App\RegisterHostelRooms;
use App\User;
use GoogleMaps;
use Illuminate\Http\Request;
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
        $njokerio = RegisterHostel::where("hregion","Njokerio")->get();
        View::share("njokerio", $njokerio);
        $right = RegisterHostel::where("hregion", "Right")->get();
        View::share("right", $right);
        $booster = RegisterHostel::where("hregion", "Booster")->get();
        View::share("booster", $booster);
        $carwash = RegisterHostel::where("hregion", "Carwash")->get();
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
        $hostels = RegisterHostel::where('landlord_id', Auth::user()->id)->get();
        /*dd($hostels);*/
        $get =  BookedRooms::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $message = ContactedLandlord::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        /*$reply = Reply::where('user_id', Auth::user()->id)->get();*/
        /*dd($reply[0]);*/
        return view('index', compact('hostels', 'get', 'message', 'reply', 'app'));
    }

    public function acknowledge($hostel_id, $room_id, $book_id){
        $hostels = RegisterHostel::where('landlord_id', Auth::user()->id)->get();
        $get =  BookedRooms::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $hostel = RegisterHostel::findorFail($hostel_id);
        $message = ContactedLandlord::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        /*$reply = Reply::where('user_id', Auth::user()->id)->get();*/
        $gets =  RegisterHostelRooms::findorFail($room_id);
        $ret = BookedRooms::findorFail($book_id);
        return view('ackBooking', compact('hostels', 'hostel', 'gets','ret', 'get', 'message', 'reply', 'app'));
    }

    public function message($hostel_id, $message_id, $user_id){
        $hostels = RegisterHostel::where('landlord_id', Auth::user()->id)->get();
        $get = BookedRooms::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $message = ContactedLandlord::where('landlord_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        /*dd($message);*/
        $hostel = RegisterHostel::findorFail($hostel_id);
        $landlord = $hostel['landlord_id'];
        $details = User::findorFail($landlord);
        $messages = ContactedLandlord::findorFail($message_id);
        $reply = ContactedLandlord::where('user_id', Auth::user()->id)->get();
        $mwenyewe = User::findorFail(Auth::user()->id);
        $mwenyeji = $mwenyewe['id'];
        $text = DB::select('select * from contacted_landlords where user_id=? and landlord_id=? or user_id=? and landlord_id=?', [$user_id, $mwenyeji, $mwenyeji, $user_id]);
        /*dd($text);*/
        return view('messageLandlord', compact('hostels', 'hostel', 'messages', 'get', 'message', 'mwenyewe', 'reply', 'details', 'text', 'app'));
    }

    public function store(Request $request)
    {
        //save user to db
        $message = new ContactedLandlord($request->all());
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
        $hostel = RegisterHostel::findorFail($hostel_id);
        $ret = BookedRooms::findorFail($book_id);
        $gets =  RegisterHostelRooms::findorFail($room_id);
        $update = DB::update('update register_hostel_rooms set status = 1 where id = ? and hostel_id=?', [$room_id, $hostel_id]);
        return view('ackBooking', compact('update', 'ret', 'gets', 'hostel'));
    }

    public function approve(Request $request){
        $approve = new ApprovedBooking($request->all());
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
        $decline = new ApprovedBooking($request->all());
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

    public function acceptRoom($hostel_id, $room_id, $book_id, $approve_id){
        $acceptroom =ApprovedBooking::findorFail($approve_id);
        $roomdetails = RegisterHostelRooms::findorFail($room_id);
        $hosteldetails = RegisterHostel::findorFail($hostel_id);
        /*dd($hosteldetails);*/
        $bookdetails = BookedRooms::findorFail($book_id);
        $app = ApprovedBooking::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('acceptRoom', compact('acceptroom', 'roomdetails', 'hosteldetails', 'bookdetails', 'app'));
    }
}
