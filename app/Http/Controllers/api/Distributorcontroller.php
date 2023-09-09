<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Distribution;
use Illuminate\Http\Request;

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

    public function createreturn(Request $request){

        $distribution=Distribution::make($request->all(),[
            'name'=>'required',
            'armstype_id'=>'required',
            'rank_id'=>'required',
            'date'=>'required',

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
        
        $return=Armsreturn::create([
        
            'name'=>$request->name,
            'armstype_id'=>$request->armstype_id,
            'rank_id'=>$request->rank_id,
            'date'=>$request->date,
        ]);


        return response()->json([
            'success'=>true,
            'data'=>$return,
            'message'=>'return created successfull.',
            'status_code'=>200
        ]);
        
    }
}
