<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Distribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Distributorcontroller extends Controller
{
    public function getdistributor(){
        $distribution=Distribution::all();

        return response()->json([
            'success'=>true,
            'data'=>$distribution,
            'message'=>'All distribution list',
            'status_code'=>200
        ]);
    }

    public function distributorView($id){
        $distribution=Distribution::find($id);
    
        return response()->json([
            'success'=>true,
            'data'=>$distribution,
            'message'=>'Single distribution view',
            'status_code'=>200
        ]);
    }

    public function createdistributor(Request $request){

        $validate=Validator::make($request->all(),[
            'armstype_id'=>'required',
            'quantity'=>'required',
            'name'=>'required',
            'purpose'=>'required'

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
        
         $distribution=Distribution::create([
        
            'armstype_id'=>$request->armstype_id,
            'quantity'=>$request->quantity,
            'name'=>$request->name,
            'purpose'=>$request->purpose,
            
        ]);


        return response()->json([
            'success'=>true,
            'data'=>$distribution,
            'message'=>'distribution created successfull.',
            'status_code'=>200
        ]);
        
    }
}
