<?php

namespace App\Http\Controllers;

use App\Models\Armsetups;
use App\Models\Armstypes;
use Illuminate\Http\Request;

class ArmsetupController extends Controller
{
    public function Armsetup (){
        $armsetup=Armsetups::with('armstype')->paginate(5);
        return view ('backend.page.armsetup.Armsetup',compact('armsetup'));
    
    }

    public function agree (){
        $armstype=Armstypes::all();
        return view('backend.page.armsetup.agree',compact('armstype'));
        }
        public function store(Request $request){
            $request->validate([
                'name'=>'required',
                'image'=>'required',
                'specification'=>'required',
                'armstype_id'=>'required',
                
              
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
                'image'=>$fileName,
                'armstype_id'=>$request->armstype_id
            ]);
            return to_route('Armsetup')->with('msg','Data store Successfully');
    
        }

        public function setup_edit($id){
            // $armstype=Armstypes::all();
            // dd($armstype);
    
            $armsetup=Armsetups::find($id);
            return view('backend.page.armsetup.edit_setup',compact('armsetup'));
        }

        public function setup_update(Request $request,$id){
            dd($request->all());
            $armsetup=Armsetups::find($id);


        }
}

