<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class caseRecordsController extends Controller
{
    public function display()
    {
        // Cases::where('client_id',10)->join('advocate',)->get();

        $results=DB::table('cases')
                ->join('advocate','cases.id','=','advocate.id')
                ->select('cases.*','advocate.name')
                ->where('client_name',auth()->user()->name)->Where('status','ACCEPT')
                ->get();


        // foreach($results as $result)
        // {
        //     error_log($result->case_name);
        // }


        return view('caseRecords',['results'=>$results]);
    }
}
