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
        return $this->responseWithSuccess($arms,"All arms list");
    }

    public function armsView($id){
        $arms=Armstypes::find($id);
        return $this->responseWithSuccess($arms,"Single arms view");
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
            return $this->responseWithError($validate->getMessageBag());
        }
        
        $arms=Armstypes::create([
        
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName,
        ]);


        return $this->responseWithSuccess($arms,"arms created successfull.");
        
    }
}
