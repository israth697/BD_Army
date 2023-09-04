<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class stockcontroller extends Controller
{
    public function getstocks(){
        $stocks=Stock::all();

        return response()->json([
            'success'=>true,
            'data'=>$stocks,
            'message'=>'All stock list',
            'status_code'=>200
        ]);
    }

    public function stockView($id){
        $stock=Stock::find($id);
    
        return response()->json([
            'success'=>true,
            'data'=>$stock,
            'message'=>'Single stock view',
            'status_code'=>200
        ]);
    }

    public function create(Request $request){

        $validate=Validator::make($request->all(),[
            'armstype_id'=>'required|numeric',
            'type_quantity'=>'required',

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
        
         $stock = Stock::create([
        
            'armstype_id'=>$request->armstype_id,
            'type_quantity'=>$request->type_quantity,
        ]);


        return response()->json([
            'success'=>true,
            'data'=>$stock,
            'message'=>'stock created successfull.',
            'status_code'=>200
        ]);
        
    }
   

}
