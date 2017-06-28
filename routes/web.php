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

Route::get('home/registerhostelrooms/{hostel_id}', 'RegisterHostelRoomsController@create');
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

Route::get('home/registerhostel', 'RegisterHostelController@index');
Route::post('/registerhostel', 'RegisterHostelController@store');
//Route::get('/registerhostel', 'RegisterHostelController@hostel');

Route::get('home/book/{hostel_id}/{room_id}', 'BookController@index');
Route::post('/book', 'BookController@store');

Route::get('home/contactlandlord/{hostel_id}', 'ContactLandlordController@message');
Route::post('/contactlandlord', 'ContactLandlordController@store');

Auth::routes();

Route::get('/home', 'HomeController@hostel');
Route::get('/home/listusers', 'HomeController@listusers');
Route::get('/home/listhostels', 'HomeController@listhostels');
Route::get('/home/listhostelrooms', 'HomeController@listrooms');
Route::get('/home/listoccupiedrooms', 'HomeController@listoccupancy');
Route::get('/home/listbookedrooms', 'HomeController@listbooked');
Route::get('/home/listapprovedrequests', 'HomeController@listapproved');
Route::get('/home/listvacated', 'HomeController@listvacated');
Route::get('/home/ackbooking/{hostel_id}/{room_id}/{book_id}', 'HomeController@acknowledge');
Route::get('/home/approvebooking/{hostel_id}/{room_id}/{book_id}', 'HomeController@update');
Route::get('/home/approvelandlord/{user_id}', 'HomeController@applandlord');
Route::post('/home/approvebooking', 'HomeController@approve');
Route::post('/contactadmin', 'HomeController@adminchat');
Route::get('/home/vacaterooms', 'HomeController@vacate');
Route::post('/home/declinebooking', 'HomeController@decline');
Route::get('/home/vacate/{room_id}/{user_id}', 'HomeController@emptyroom');
Route::post('/home/occupied', 'HomeController@occupied');
Route::get('/home/messagelandlord/{hostel_id}/{message_id}/{user_id}', 'HomeController@message');
Route::post('/messagelandlord', 'HomeController@store');
Route::get('/home/acceptroom/{hostel_id}/{room_id}/{book_id}/{approve_id}', 'HomeController@acceptRoom');
Route::get('/home/accept/{hostel_id}/{room_id}/{book_id}/{approve_id}', 'HomeController@updater');
Route::get('/home/decline/{hostel_id}/{room_id}/{book_id}/{approve_id}', 'HomeController@decliner');





