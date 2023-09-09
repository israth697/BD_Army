<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Armsreturn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class returncontroller extends Controller
{
    public function getreturn(){
        $return=Armsreturn::all();

        return response()->json([
            'success'=>true,
            'data'=>$return,
            'message'=>'All return list',
            'status_code'=>200
        ]);
    }

    public function returnsView($id){
        $return=Armsreturn::find($id);
    
        return response()->json([
            'success'=>true,
            'data'=>$return,
            'message'=>'Single return view',
            'status_code'=>200
        ]);
    }

    public function createreturn(Request $request){

        $validate=Validator::make($request->all(),[
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
