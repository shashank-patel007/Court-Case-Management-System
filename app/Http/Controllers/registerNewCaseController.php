<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\AdvocateCases;

class registerNewCaseController extends Controller
{
    public function store()
    {

        $advocate=DB::table('advocate')->where('name',request('advocate'))->pluck('id');
        $caseId=DB::table('cases')->orderBy('case_id','DESC')->pluck('case_id');
        error_log($caseId[0]);
        $caseId[0]=$caseId[0]+1;
        error_log($caseId[0]);

        $newCase=new AdvocateCases();

        $newCase->case_name=request('casename');
        $newCase->case_type=request('casetype');
        $newCase->case_details=request('casedetails');
        $newCase->id=$advocate[0];
        $newCase->status="PENDING";
        $newCase->case_id=$caseId[0];

        error_log($newCase);

        DB::table('cases')->insert([
            'client_name'=>auth()->user()->name,
            'case_name'=>$newCase->case_name,'case_type'=>$newCase->case_type,
            'case_details'=>$newCase->case_details,'id'=>$advocate[0],
            'case_id'=>$caseId[0],'status'=>"PENDING"

        ]);

        // return redirect('/registerNewCase');
        return back();
    }
}
