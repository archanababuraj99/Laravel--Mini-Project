<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\adminlogincontroller;

use App\Http\Controllers\AddEventController;

use App\Http\Controllers\changecontroller;

use App\Http\Controllers\viewEventController;
use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\viewbookingcontroller;
use App\Http\Controllers\viewAllbookingcontroller;
use App\Http\Controllers\viewapprovedbookingcontroller;
use App\Http\Controllers\ConformbookingController;
use App\Http\Controllers\userlistcontroller;
use App\Http\Controllers\rejectcontroller;
use App\Http\Controllers\bookingdatecontroller;
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

Route::get('/', function () {
    return view('Guest/welcome');
});


Route::get('/cregister', function () {
    return view('Guest/cregister');
});
Route::get('/clogin', function () {
    return view('Guest/clogin');
});

Route::get('/alogin', function () {
    return view('Guest/alogin');
});


Route::get('/cregister',[CustomerController::class,'create']);
Route::post('/cregister',[CustomerController::class,'store']);

//Route::post('/cregister',[RegisterController::class,'RegisterCustomer']);

Route::post('/clogin',[LoginController::class,'CustomerLog']); 

Route::post('/alogin',[adminlogincontroller::class,'Adminlogin']); 

Route::get('Customer/myprofile',function(){
    return view('Customer/myprofile');
});


Route::get('Admin/admindash',function(){
    return view('Admin/admindash');
});

Route::get('/gallery',function(){
    return view('Guest/gallery');
});
Route::get('/aboutus',function(){
    return view('Guest/aboutus');
});




Route::get('Customer/myprofile',[MyProfileController::class,'Profile']);
Route::post('Customer/myprofile',[MyProfileController::class,'UpdateData']);

Route::get('Customer/booking',[viewEventController::class,'EventData']);

Route::post('Customer/booking',[viewEventController::class,'View']);

Route::get('Customer/bookpage',[viewEventController::class,'ViewData']);

Route::post('Customer/bookpage',[bookingcontroller::class,'ApptIns']);
Route::get('Customer/viewcbooking',[viewbookingcontroller::class,'Viewbooking']);

Route::get('Customer/confirmedbooking',[ConformbookingController::class,'Mybooking']);


Route::get('/clogout',[LoginController::class,'logout']);



//Route::post('/clogin',[CustomerController::class,'store']);


//--------------------------Event---------------------------------
//-------------event-------------------
Route::get('Admin/addevent', function () {
    return view('Admin/addevent');
});

Route::post('Admin/addevent',[AddEventController::class,'InsertEvent']);
Route::get('Admin/addevent',[AddEventController::class,'ViewEvent']);
Route::get('Admin/addevent/{id}',[AddEventController::class,'DeleteEvent']);

Route::get('Admin/viewallbooking',[viewAllbookingcontroller::class,'Viewbookingnew']);


Route::get('Admin/ViewBookingDateWise', function () {
    return view('Admin/ViewBookingDateWise');
});
 Route::post('Admin/ViewBookingDateWise',[bookingdatecontroller::class,'Viewbookingdate']);


Route::get('Admin/approvebooking',[viewapprovedbookingcontroller::class,'Viewbooking']);
Route::get('Admin/viewallusers',[userlistcontroller::class,'User']);


Route::get('Admin/Rejectstatus', function () {
    return view('Admin/Rejectstatus');
});
Route::get('Admin/Rejectstatus',[viewAllbookingcontroller::class,'Viewbookingnew']);
Route::post('Admin/Rejectstatus',[rejectcontroller::class,'rejectupdate']);
//---------------------------------------------




Route::get('Customer/changepassword',function(){
    return view('Customer/changepassword');
});
Route::post('Customer/changepassword',[changecontroller::class,'PasswordChange']);
