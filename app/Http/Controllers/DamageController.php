<?php

namespace App\Http\Controllers;

use App\Models\Armstypes;
use App\Models\Damagestock;
use Illuminate\Http\Request;

class DamageController extends Controller
{
    public function damagestock (){
        $damagestock=Damagestock::with('armstype')->paginate(5);
        return view ('backend.page.damagestock.damagestock',compact('damagestock'));
    }
    public function search (){
        $armstype=Armstypes::all();
        return view ('backend.page.damagestock.search',compact('armstype'));
    }
    public function store(Request $request){
    //    dd($request->all());

        $request->validate([
            'armstype_id'=>'required',
            'amount'=>'required',
            'purpose'=>'required',
            'submition'=>'required',
        ]);

          
         
        Damagestock::create([
            // database column name=>$request->input field name
            'armstype_id'=>$request->armstype_id,
            'amount'=>$request->amount,
            'purpose'=>$request->purpose,
            'submition'=>$request->submition


        ]);
        return to_route('damage.stock')->with('msg','Data store Successfully');

    }
}
