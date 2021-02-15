<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\HeaderController;

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
//index route
// Route::get('/', function () {
//     return view('index');
// })->name('index');
//user input route
Route::post('/create', [PageController::class, 'create'])->name('create');
//user login route
Route::post('/login', [PageController::class, 'login'])->name('login');

//login page route
Route::get('/login',function(){
    return view('login');
})->name('login');

//sign up page route
Route::get('/signup',function(){
    return view('signup');
})->name('signup');

//route for index packages and pricing
Route::get('/packages',function(){
    return view('index-pricing');
})->name('indexpricing');

//contact route
Route::get('/contactus',function(){
    return view('contact');
})->name('contact');

//sign up payment page route
Route::get('/signuppayment',function(){
    return view('signup-payment');
})->name('signup-payment');

//reset password from login page
Route::get('/resetpassword-login',function(){
    return view('reset-passwordlogin');
})->name('reset-password-login');

//reset password page route
Route::get('/resetpassword',function(){
    return view('reset-password');
})->name('reset-password');

//profile and privacy page route
Route::get('/profile',function(){
    return view('profile');
})->name('profile');

//pricing page route
Route::get('/pricing',function(){
    return view('myaccount');
})->name('pricing');


//edit-account page route
Route::get('/edit-account',function(){
    return view('edit-account');
})->name('edit-account');

//this is for testing purpose .this page will have to come from login route
Route::get('/myaccount',[LoginController::class,'index'])->name('myaccount');

//billing upgrade page route
Route::get('/billing-upgrade',function(){
    return view('billing-upgrade');
})->name('billing-upgrade');

//billing payment type page route
Route::get('/billing-payment',function(){
    return view('billing-payment');
})->name('billing-payment');

//billing history page route
Route::get('/billing-history',function(){
    return view('billing-history');
})->name('billing-history');


//billing invoice page route
Route::get('/billing-invoice',function(){
    return view('billing-invoice');
})->name('billing-invoice');

//faq page route
Route::get('/faq',function(){
    return view('faq');
})->name('faq');

//helpcenter page route
Route::get('/helpcenter',function(){
    return view('helpcenter');
})->name('helpcenter');


//discussion page route
Route::get('/discussion',function(){
    return view('discussion');
})->name('discussion');


//ask-question page route
Route::get('/askquestion',function(){
    return view('ask-question');
})->name('ask-question');

Route::get('/helpdesk',function(){
    return view('helpdesk');
})->name('helpdesk');

Route::get('/subscription-dashboard',function(){
    return view('subscriptions-dashboard');
})->name('subscriptions-dashboard');


Route::get('/admin',function(){
    return view('admin/admin-login');
})->name('admin-login');

//route admin dashboard route

// Route::get('/admindashboard',function(){
//     return view('admin/admin-dashboard');
// })->name('admin-dashboard');
Route::get('/admindashboard',[AdminController::class,'admindashboard'])->name('admin-dashboard');

//route admin header form
// Route::get('/adminheaderform',function(){
//     return view('admin/admin-header');
// })->name('admin-header');

//route admin footer form

Route::get('/adminfooterform',function(){
    return view('admin/admin-footer');
})->name('admin-footer');

//route admin slider form
// Route::get('/adminsliderform',function(){
//     return view('admin/admin-slider');
// })->name('admin-slider');
Route::get('/adminslider',[SliderController::class,'showall'])->name('admin-slider');


Route::get('/adminsettings',function(){
    return view('admin/admin-settings');
})->name('admin-settings');

// Route::get('/head',[AdminController::class,'index'])->name('head');
Route::get('/',[AdminController::class,'index'])->name('index');

Route::post('/admindashboard',[AdminController::class,'create'])->name('settingscreate');


Route::get('/adminmaster',[AdminController::class,'admintest'])->name('adminmaster');


//slider part
//create slider post request
Route::post('/createslider',[SliderController::class,'create'])->name('createslider');

Route::post('/updateslider/{id}',[SliderController::class,'update'])->name('updateslider');
//show single slide info
Route::get('/showoneslider/{id}',[SliderController::class,'showoneslider'])->name('beforeupdateslider');


// Route::get('/adminmaster',function(){
//     return view('admin/test');
// });
//slide update under slider
Route::get('/manageslider/{id}',[SlideController::class,'slideinfo'])->name('manageslide');

Route::get('/addsliderform',function(){
    return view('admin/admin-addslider');
})->name('slidercreateform');

//add slide form
Route::get('/addslideform',function(){
    return view('admin/admin-addslide');
})->name('addslide');
//
Route::post('/createslide',[SlideController::class,'create'])->name('createslide');


Route::get('/slideinfo/{id}',[SlideController::class,'singleslideinfo'])->name('slideinfo');

Route::post('/slideupdate/{id}',[SlideController::class,'slideupdate'])->name('slideupdate');


//header Part
Route::get('/addheader',[HeaderController::class,'addform'])->name('addheaderform');

Route::post('/createheader',[HeaderController::class,'create'])->name('createheader');

Route::post('/updateheader/{id}',[HeaderController::class,'update'])->name('editheader');

Route::get('/adminheader',[HeaderController::class,'showall'])->name('allheadersinfo');

Route::get('/editheader/{id}',[HeaderController::class,'showone'])->name('singleheaderinfo');

//footer part