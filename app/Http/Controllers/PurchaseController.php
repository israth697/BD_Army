<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function Purchase (){
        $purchase=Purchase::with('vendor')->paginate(5);
        return view ('backend.page.purchase.Purchase',compact('purchase'));
    }

    public function tender_view ($id){
        $purchase=Purchase::find($id);

        // dd($purchase);
        return view('backend.page.purchase.purchase_view',compact('purchase'));
    }


    public function tender (){
        $vendor=Vendor::all();
        return view ('backend.page.purchase.tender',compact('vendor'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',
            'details'=>'required',
        ]);
            // dd($request->all());
        Purchase::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'details'=>$request->details,
            'vendor_id'=>$request->vendor_id,

        ]);
        return to_route('Purchase')->with('msg','Data store Successfully');

    }
}
