<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function Purchase (){
        $purchase=Purchase::paginate(5);
        return view ('backend.page.purchase.Purchase',compact('purchase'));
    }

    public function tender (){
        return view ('backend.page.purchase.tender');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',
            'details'=>'required',
        ]);
        //  dd($request->all());
        Purchase::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'details'=>$request->details,

        ]);
        return to_route('Purchase')->with('msg','Data store Successfully');

    }
}
