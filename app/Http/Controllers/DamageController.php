<?php

namespace App\Http\Controllers;

use App\Models\Damagestock;
use Illuminate\Http\Request;

class DamageController extends Controller
{
    public function damagestock (){
        $damagestock=Damagestock::paginate(5);
        return view ('backend.page.damagestock.damagestock',compact('damagestock'));
    }
    public function search (){
        return view ('backend.page.damagestock.search');
    }
    public function store(Request $request){
        $request->validate([
            'amount'=>'required',
            'purpose'=>'required',
            'submition'=>'required',
        ]);
        //  dd($request->all());
        Damagestock::create([
            // database column name=>$request->input field name
            'amount'=>$request->amount,
            'purpose'=>$request->purpose,
            'submition'=>$request->submition,


        ]);
        return to_route('damage.stock')->with('msg','Data store Successfully');

    }
}
