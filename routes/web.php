<?php

use App\Advocate;
use App\AdvocateCases;
use App\RoleUser;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home',function(){
  $role=RoleUser::where('user_id',auth()->user()->id)->firstOrFail();
   if($role->role_id==1)
    return view('home');
  if ($role->role_id==2){
      // $advocate=Advocate::where('name',auth()->user()->name);
      // $cases=AdvocateCases::all()->where('id',$advocate->id);
      return view('advocate/advocateHomePage');
      // return "Here";
    }
    else {
      $cases=AdvocateCases::all()->where('name',auth()->user()->name);
      return view('clientHomePage',compact('cases','role'));
    }
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('users','UsersController',['except'=>['show','create','store']]);
});

Route::get('/clientProfile', function () {
    return view('clientProfile');
});

// Route::get('/viewOurLawyers', function () {
//     $advocates=Advocate::all();
//     return view('viewOurLawyers',compact('advocates'));
// });
Route::group( ['prefix' => 'client-homepage'], function(){

    Route::get('/','clientHPController@homepage');
    Route::get('/clientAnnouncements','clientHPController@announce')->name('clientAnnouncements');


});

Route::group( ['prefix' => 'advocate-homepage'], function(){

    Route::get('/','advocateHPController@homepage');
    Route::get('/advocateAnnouncements','advocateHPController@announce')->name('advocateAnnouncements');
});

Route::get('/advocateProfile', function () {
  $advocate=Advocate::where('name','=',auth()->user()->name)->firstOrFail();
    return view('advocate/advocateProfile',compact('advocate'));
});

Route::get('/caseRequest', function () {
  $advocate=Advocate::where('name','=',auth()->user()->name)->firstOrFail();
  $cases=AdvocateCases::all()->where('id',strval($advocate->id))->where('status','PENDING');
    return view('advocate/caseRequest',compact('advocate','cases'));
});

Route::get('/advocateCurrentCases', function () {
    $advocate=Advocate::where('name','=',auth()->user()->name)->firstOrFail();
    $cases=AdvocateCases::all()->where('id',strval($advocate->id))->where('status','ACCEPT');
    return view('advocate/advocateCurrentCases',compact('advocate','cases'));
});

Route::resource('/updateAdvocate','AdvocateUpdate');
Route::resource('/caseStatus','CaseStatus');
Route::post('/caseStatus/{id}','CaseStatus@update');
Route::get('/registerNewCase',function(){
    return view('registerNewCase');
});
Route::post('/registerNewCase','registerNewCaseController@store');
Route::get('/caseRecords','caseRecordsController@display');

Route::get('/advocateAnnouncements',function(){
  $advocate=Advocate::where('name',auth()->user()->name);
  $cases=AdvocateCases::all()->where('id',$advocate->id);
    return view('advocate.advocateAnnouncements',compact('advocate','cases'));
});

Route::get('/clientAnnouncements',function(){
  $count=0;
  $cases=AdvocateCases::all()->where('client_name',auth()->user()->name)->where('status','ACCEPT');
  return view('clientAnnouncements',compact('cases','count'))->name('clientAnnouncements');
});

Route::get('/viewOurLawyers', 'viewOurLawyersController@display');
Route::post('/viewOurLawyers','viewOurLawyersController@search');

Route::get('/user-login',function(){
  return view('user-login');
});

Route::get('/user-register',function(){
  return view('user-register');
});


Route::get('/test',function(){
  return view('test');
});
