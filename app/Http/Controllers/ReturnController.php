<?php

namespace App\Http\Controllers;

use App\Models\Armsreturn;
use App\Models\Armstypes;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function return (){
        $armsreturn=Armsreturn::with('armstype')->paginate(5);
        return view ('backend.page.return.return',compact('armsreturn'));
    }

    public function back (){
        $armstype=Armstypes::all();
        return view ('backend.page.return.back',compact('armstype'));
    }

    public function storing(Request $request){
        // dd($request->all());
        $request->validate([
            'armstype_id'=>'required',
            'quantity'=>'required',
            'name'=>'required',
            'purpose'=>'required'
            
        ]);
            // dd($request->all());
            Armsreturn::create([
            // database column name=>$request->input field name
            'armstype_id'=>$request->armstype_id,
            'quantity'=>$request->quantity,

            'name'=>$request->name,
            'purpose'=>$request->purpose,
            

        ]);
        return to_route('return.arms')->with('msg','Data store Successfully');

    }








}
