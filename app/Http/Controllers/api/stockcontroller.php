<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class stockcontroller extends Controller
{
    public function getstocks(){
        $stocks=Stock::with('armstype')->get();
        // return $this->responseWithSuccess($stocks,'All stock list');
        return $this->responseWithSuccess(StockResource::collection($stocks),'All stock list');
        
    }

    public function stockView($id){
        $stock=Stock::find($id);
        return $this->responseWithSuccess($stock,"Single stock view");
    }

    public function create(Request $request){

        $validate=Validator::make($request->all(),[
            'armstype_id'=>'required',
            'type_quantity'=>'required',

        ]);
           

        if($validate->fails())
        {
            return $this->responseWithError($validate->getMessageBag()); 
        }
        
         $stock = Stock::create([
        
            'armstype_id'=>$request->armstype_id,
            'type_quantity'=>$request->type_quantity,
        ]);

        return $this->responseWithSuccess($stock,"stock created successfull.");
    }

    public function stockupdate(Request $request,$id){
        $stock=Stock::find($id);
        if($stock){
           $stock->update([
            'armstype_id'=>$request->armstype_id,
            'type_quantity'=>$request->type_quantity,
           ]);
           return $this->responseWithSuccess($stock,"Stock Updated successfully.");
        }

    }
   

}
