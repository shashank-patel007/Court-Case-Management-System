<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class viewOurLawyersController extends Controller
{
    public function display()
    {
        $results=DB::table('advocate')->get();

        return view('/viewOurLawyers',['results'=> $results]);
    }

    public function search(Request $request)
    {
        $results;
        $search_name=request('search');

        if($request->submit == "name")
        {
            $results=DB::table('advocate')->where('name','LIKE',"%{$search_name}%")->get();
        }
        else if($request->submit == "expertise")
        {
            $results=DB::table('advocate')->where('expertise','LIKE',"%{$search_name}%")->get();
        }

        return view('/viewOurLawyers',['results'=>$results]);
    }
}
