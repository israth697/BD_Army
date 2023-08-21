<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function tender_report(Request $request){
            // dd($request->all());
    
        //     $request->validate([
        //          'from_date'=>'required|date',
        //         'to_date'=>'required|date|after:from_date'
        //     ]);
    
         $from=$request->from_date;
            $to=$request->to_date;
    
             $purchase=Purchase::whereBetween('created_at',[$from,$to])->get();
             //dd($purchase);
    
            //return view('backend.page.report.purchase_report',compact('purchase'));
            return view('backend.page.report.purchase_report');
        }

        public function show_report (){
            return view();
        }
    
}
