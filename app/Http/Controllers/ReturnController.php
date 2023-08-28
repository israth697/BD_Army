<?php

namespace App\Http\Controllers;

use App\Models\Armsreturn;
use App\Models\Armstypes;
use App\Models\Rank;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function return (){
        $armsreturn=Armsreturn::with('armstype','rank')->paginate(5);
        return view ('backend.page.return.return',compact('armsreturn'));
    }

    public function return_view ($id){
        $armsreturn=Armsreturn::find($id);
        // dd($vendor);
        return view('backend.page.return.return_view',compact('armsreturn'));
    }

    public function back (){
        $armstype=Armstypes::all();
        $rank=Rank::all();
        return view ('backend.page.return.back',compact('armstype','rank'));
    }

    public function returnstore (Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'armstype_id'=>'required',
            'rank_id'=>'required',
            'date'=>'required',
            
            
        ]);
            // dd($request->all());
            Armsreturn::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'armstype_id'=>$request->armstype_id,
            'rank_id'=>$request->rank_id,
            'date'=>$request->date,
            

        ]);
        return to_route('return.arms')->with('msg','Data store Successfully');

    }








}
