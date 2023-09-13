<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class vendorcontroller extends Controller
{
    public function getvendor(){
        $vendoor=Vendor::all();

        return response()->json([
            'Success'=> true,
            'data'=> $vendoor,
            'message'=>'All vendor List',
            'Status_code'=>200,
        ]);
    }

    public function vendorView ($id){
        $vendoor=Vendor::find($id);
        return response()->json([
            'Success'=> true,
            'data'=> $vendoor,
            'message'=>'Single vendor List',
            'Status_code'=>200,
        ]);
    }
 
    public function createvendor(Request $request){
    $validate=Validator::make($request->all(),[
        'name'=>'required',
        'email'=>'required|email',
        'contact'=>'required',
        'address'=>'required',
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
        $vendoor=Vendor::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address
        ]);
        return response()->json([
            'success'=>true,
            'data'=> $vendoor,
            'message'=>'vendor created successfull.',
            'status_code'=>200
        ]);
    }
        public function vendorupdate(Request $request,$id){
            $vendoor=Vendor::find($id);
            if($vendoor){
             $vendoor->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address

                ]);
                return $this->responseWithSuccess($vendoor,"vendor Updated successfully.");
            }

        }
    

}
