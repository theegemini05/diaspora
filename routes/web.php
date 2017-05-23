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

Route::get('/contactlandlord/{hostel_id}', 'ContactLandlordController@message');
Route::post('/contactlandlord', 'ContactLandlordController@store');

Auth::routes();

Route::get('/home', 'HomeController@hostel');
Route::get('/home/ackbooking/{hostel_id}/{room_id}/{book_id}', 'HomeController@acknowledge');
Route::get('/home/approvebooking/{hostel_id}/{room_id}/{book_id}', 'HomeController@update');
Route::post('/home/approvebooking', 'HomeController@approve');
Route::post('/home/declinebooking', 'HomeController@decline');
Route::get('/home/messagelandlord/{hostel_id}/{message_id}/{user_id}', 'HomeController@message');
Route::post('/messagelandlord', 'HomeController@store');
Route::get('/home/acceptroom/{hostel_id}/{room_id}/{book_id}/{approve_id}', 'HomeController@acceptRoom');
Route::get('/home', 'HomeController@hostel');



