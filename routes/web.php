<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
/*Route::get('/', 'HomeController@hostel');*/


Route::get('/adminAhero', function () {
    return view('admin/adminAhero');
});

Route::get('/njokerio/aboutKwaNjenga', function () {
    return view('about/njokerio/aboutKwaNjenga');
});

Route::get('/njokerio/aboutMwishoWaLami', function () {
    return view('about/njokerio/aboutMwishoWaLami');
});

Route::get('/njokerio/aboutKwaFundi', function () {
    return view('about/njokerio/aboutKwaFundi');
});

Route::get('/njokerio/aboutAhero', function () {
    return view('about/njokerio/aboutAhero');
});

Route::get('/right/aboutKwaNaff', function () {
    return view('about/right/aboutKwaNaff');
});

Route::get('/right/aboutTimberSales', function () {
    return view('about/right/aboutTimberSales');
});

Route::get('/right/aboutMwangaza', function () {
    return view('about/right/aboutMwangaza');
});

Route::get('/booster/aboutKings', function () {
    return view('about/booster/aboutKings');
});

Route::get('/booster/aboutLavish', function () {
    return view('about/booster/aboutLavish');
});

Route::get('/booster/aboutBoraya', function () {
    return view('about/booster/aboutBoraya');
});

Route::get('/booster/aboutPrestige', function () {
    return view('about/booster/aboutPrestige');
});

Route::get('/booster/aboutDown', function () {
    return view('about/booster/aboutDown');
});

Route::get('/carwash/aboutLumiarj', function () {
    return view('about/carwash/aboutLumiarj');
});

Route::get('/carwash/aboutCarwash', function () {
    return view('about/carwash/aboutCarwash');
});

Route::get('/carwash/aboutGloss', function () {
    return view('about/carwash/aboutGloss');
});

Route::get('/carwash/aboutNjoroCanning', function () {
    return view('about/carwash/aboutNjoroCanning');
});

Route::get('/carwash/aboutMidways', function () {
    return view('about/carwash/aboutMidways');
});

Route::get('/carwash/about2for3', function () {
    return view('about/carwash/about2for3');
});

Route::get('/carwash/aboutGuests', function () {
    return view('about/carwash/aboutGuests');
});

Route::get('/njokerio/contactKwaNjenga', function () {
    return view('contact/njokerio/contactKwaNjenga');
});

Route::get('/njokerio/contactMwishoWaLami', function () {
    return view('contact/njokerio/contactMwishoWaLami');
});

Route::get('/njokerio/contactKwaFundi', function () {
    return view('contact/njokerio/contactKwaFundi');
});

Route::get('/njokerio/contactAhero', function () {
    return view('contact/njokerio/contactAhero');
});

Route::get('/right/contactKwaNaff', function () {
    return view('contact/right/contactKwaNaff');
});

Route::get('/right/contactTimberSales', function () {
    return view('contact/right/contactTimberSales');
});

Route::get('/right/contactMwangaza', function () {
    return view('contact/right/contactMwangaza');
});

Route::get('/booster/contactKings', function () {
    return view('contact/booster/contactKings');
});

Route::get('/booster/contactLavish', function () {
    return view('contact/booster/contactLavish');
});

Route::get('/booster/contactBoraya', function () {
    return view('contact/booster/contactBoraya');
});

Route::get('/booster/contactPrestige', function () {
    return view('contact/booster/contactPrestige');
});

Route::get('/booster/contactDown', function () {
    return view('contact/booster/contactDown');
});

Route::get('/carwash/contactLumiarj', function () {
    return view('contact/carwash/contactLumiarj');
});

Route::get('/carwash/contactCarwash', function () {
    return view('contact/carwash/contactCarwash');
});

Route::get('/carwash/contactGloss', function () {
    return view('contact/carwash/contactGloss');
});

Route::get('/carwash/contactNjoroCanning', function () {
    return view('contact/carwash/contactNjoroCanning');
});

Route::get('/carwash/contactMidways', function () {
    return view('contact/carwash/contactMidways');
});

Route::get('/carwash/contact2for3', function () {
    return view('contact/carwash/contact2for3');
});

Route::get('/carwash/contactGuests', function () {
    return view('contact/carwash/contactGuests');
});

Route::get('/booster/tourBoraya', function () {
    return view('tours/booster/tourBoraya');
});

Route::get('/booster/tourDown', function () {
    return view('tours/booster/tourDown');
});

Route::get('/booster/tourKings', function () {
    return view('tours/booster/tourKings');
});

Route::get('/booster/tourLavish', function () {
    return view('tours/booster/tourLavish');
});

Route::get('/booster/tourPrestige', function () {
    return view('tours/booster/tourPrestige');
});

Route::get('/carwash/tourCarwash', function () {
    return view('tours/carwash/tourCarwash');
});

Route::get('/carwash/tourGuests', function () {
    return view('tours/carwash/tourGuests');
});

Route::get('/carwash/tourGloss', function () {
    return view('tours/carwash/tourGloss');
});

Route::get('/carwash/tour2for3', function () {
    return view('tours/carwash/tour2for3');
});

Route::get('/carwash/tourLumiarj', function () {
    return view('tours/carwash/tourLumiarj');
});

Route::get('/carwash/tourMidways', function () {
    return view('tours/carwash/tourMidways');
});

Route::get('/carwash/tourNjoroCanning', function () {
    return view('tours/carwash/tourNjoroCanning');
});

Route::get('/njokerio/tourAhero', function () {
    return view('tours/njokerio/tourAhero');
});

Route::get('/njokerio/tourMwishoWaLami', function () {
    return view('tours/njokerio/tourMwishoWaLami');
});

Route::get('/njokerio/tourKwaFundi', function () {
    return view('tours/njokerio/tourKwaFundi');
});

Route::get('/njokerio/tourKwaNjenga', function () {
    return view('tours/njokerio/tourKwaNjenga');
});

Route::get('/right/tourKwaNaff', function () {
    return view('tours/right/tourKwaNaff');
});

Route::get('/right/tourTimberSales', function () {
    return view('tours/right/tourTimberSales');
});

Route::get('/right/tourMwangaza', function () {
    return view('tours/right/tourMwangaza');
});

Route::get('/registerhostelrooms/{hostel_id}', 'RegisterHostelRoomsController@create');
Route::post('/registerhostelrooms', 'RegisterHostelRoomsController@store');
/*Route::get('/registerhostelroomscarwash/{hostel_id}', 'RegisterHostelRoomsCarwashController@create');
Route::post('/registerhostelroomscarwash', 'RegisterHostelRoomsCarwashController@store');
Route::get('/registerhostelroomsnjokerio/{hostel_id}', 'RegisterHostelRoomsNjokerioController@create');
Route::post('/registerhostelroomsnjokerio', 'RegisterHostelRoomsNjokerioController@store');
Route::get('/registerhostelroomsright/{hostel_id}', 'RegisterHostelRoomsRightController@create');
Route::post('/registerhostelroomsright', 'RegisterHostelRoomsRightController@store');*/

Route::get('/tour/{hostel_id}', 'RegisterHostelRoomsController@tour');
Route::get('/about/{hostel_id}', 'RegisterHostelRoomsController@about');
Route::get('/contact/{hostel_id}', 'RegisterHostelRoomsController@contact');

Route::get('/registerhostel', 'RegisterHostelController@index');
Route::post('/registerhostel', 'RegisterHostelController@store');
//Route::get('/registerhostel', 'RegisterHostelController@hostel');

Route::get('/book/{hostel_id}/{room_id}', 'BookController@index');
Route::post('/book', 'BookController@store');



Auth::routes();

Route::get('/home', 'HomeController@hostel');
Route::get('/home/ackbooking/{hostel_id}/{room_id}/{book_id}', 'HomeController@acknowledge');


