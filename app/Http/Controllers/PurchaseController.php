<?php

namespace App\Http\Controllers;

use App\Models\Armstypes;
use App\Models\Purchase;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function Purchase (){
        $purchase=Purchase::with('vendor','armstype')->paginate(5);
        return view ('backend.page.purchase.Purchase',compact('purchase'));
    }

    public function tender_view ($id){
        $purchase=Purchase::find($id);

        // dd($purchase);
        return view('backend.page.purchase.purchase_view',compact('purchase'));
    }


    public function tender (){
        $vendor=Vendor::all();
        $armstype=Armstypes::all();
        return view ('backend.page.purchase.tender',compact('vendor','armstype'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'armstype_id'=>'required',
            'quantity'=>'required',
            'price'=>'required'
            
        ]);
            // dd($request->all());
        Purchase::create([
            // database column name=>$request->input field name
            'armstype_id'=>$request->armstype_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'vendor_id'=>$request->vendor_id,

        ]);
        return to_route('Purchase')->with('msg','Data store Successfully');

    }

    public function edit($id){
        $purchase=Purchase::find($id);
        return view('backend.page.purchase.purchase_edit',compact('purchase'));
    }

    public function update(Request $request,$id)
    {
        $purchase=Purchase::find($id);
        
        $purchase->update([

            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            
            
        ]);
        return to_route('Purchase');
    }

    public function delete($id){
        $purchase=Purchase::find($id);

        $purchase->delete();
        return to_route('Purchase');
    }

    
}
