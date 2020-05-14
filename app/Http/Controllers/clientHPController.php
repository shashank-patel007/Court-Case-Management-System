<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AdvocateCases;

class clientHPController extends Controller
{

public function homepage()
{
    return view('clientHomePage');
}

public function announce()
{
  $count=0;
  $cases=AdvocateCases::all()->where('client_name',auth()->user()->name)->where('status','ACCEPT');
    return view('clientAnnouncements',compact('cases','count'));
}


}
