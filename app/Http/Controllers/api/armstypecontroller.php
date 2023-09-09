<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Armstypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class armstypecontroller extends Controller
{
    public function getarms(){
        $arms=Armstypes::all();

        return response()->json([
            'success'=>true,
            'data'=>$arms,
            'message'=>'All arms list',
            'status_code'=>200
        ]);
    }

    public function armsView($id){
        $arms=Armstypes::find($id);
    
        return response()->json([
            'success'=>true,
            'data'=>$arms,
            'message'=>'Single arms view',
            'status_code'=>200
        ]);
    }

    public function createarms(Request $request){

        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',

        ]);

        $fileName = null;
        if($request->hasFile('image'))

        {

            $fileName =date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);

            
        } 
           
        if($validate->fails())
        {
            return response()->json([
            'success'=>false,
            'data'=>[],
            'message'=>$validate->getMessageBag(),
            'status_code'=>200
            ]);
        
        }
        
        $arms=Armstypes::create([
        
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName,
        ]);


        return response()->json([
            'success'=>true,
            'data'=>$arms,
            'message'=>'arms created successfull.',
            'status_code'=>200
        ]);
        
    }
}
