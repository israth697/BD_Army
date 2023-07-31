<?php

namespace App\Http\Controllers;

use App\Models\Armsetups;

use Illuminate\Http\Request;

class ArmsetupController extends Controller
{
    public function Armsetup (){
        $armsetup=Armsetups::paginate(5);

        return view ('backend.page.armsetup.Armsetup',compact('armsetup'));
    
    }

    public function agree (){
        
        return view('backend.page.armsetup.agree');
        }
        public function store(Request $request){
            $request->validate([
                'name'=>'required',
                'image'=>'required',
                
                'specification'=>'required',
                
              
            ]);
            $fileName = null;
        if($request->hasFile('image'))

        {

            $fileName =date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);

            
        }
            //  dd($request->all());
            Armsetups::create([
                // database column name=>$request->input field name
                'name'=>$request->name,
                
                'specification'=>$request->specification,
                'image'=>$fileName
    
            ]);
            return to_route('Armsetup')->with('msg','Data store Successfully');
    
        }
}
