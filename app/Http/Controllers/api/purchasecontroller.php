<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class purchasecontroller extends Controller
{
    public function getpurchase(){
        $purchase=Purchase::all();

        return response()->json([
            'success'=>true,
            'data'=>$purchase,
            'message'=>'All purchase list',
            'status_code'=>200
        ]);
    }

    public function purchasesView($id){
        $purchase=Purchase::find($id);
    
        return response()->json([
            'success'=>true,
            'data'=>$purchase,
            'message'=>'Single purchase view',
            'status_code'=>200
        ]);
    }

    public function createpurchase(Request $request){
        $validate=Validator::make($request->all(),[
            'armstype_id'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'vendor_id'=>'required',

        ]);
           
        if($validate->fails())
        {
            return response()->json([
            'success'=>false,
            'data'=>[],
            'message'=>$validate->getMessageBag(),
            'status_code'=>200
            ]);
        
        }
        
        $purchase=Purchase::create([
        
            'armstype_id'=>$request->armstype_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'vendor_id'=>$request->vendor_id,
            
        ]);


        return response()->json([
            'success'=>true,
            'data'=>$purchase,
            'message'=>'purchase created successfull.',
            'status_code'=>200
        ]);
    }
}
