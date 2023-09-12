<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Soilder;
use Illuminate\Http\Request;

class soildercontroller extends Controller
{
    public function getsoilders(){
        $soilder=Soilder::all();

        return response()->json([
            'success'=>true,
            'data'=>$soilder,
            'message'=>'All soilder list',
            'status_code'=>200
        ]);
    }

    public function soilderView($id){
        $soilder=Soilder::find($id);
    
        return response()->json([
            'success'=>true,
            'data'=>$soilder,
            'message'=>'Single soilder view',
            'status_code'=>200
        ]);
    }

    public function createsoilder(Request $request){
        $soilder=Soilder::make($request->all(),[
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
        
        $soilder=Soilder::create([
        
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
