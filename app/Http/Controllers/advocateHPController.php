<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AdvocateCases;
use App\Advocate;

class advocateHPController extends Controller
{

public static function homepage()
{
    return view('advocate/advocateHomePage');
}

public function announce()
{
  $count=0;
  $advocate=Advocate::where('name',auth()->user()->name)->get('id');
  // $id=$advocate->id;
  $cases=AdvocateCases::all()->where('id',$advocate[0]->id)->where('status','ACCEPT');
    return view('advocate/advocateAnnouncements',compact('cases','count'));
}


}
