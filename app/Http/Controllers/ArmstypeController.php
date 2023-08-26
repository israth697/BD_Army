<?php

namespace App\Http\Controllers;

use App\Models\Armstypes;
use Illuminate\Http\Request;

class ArmstypeController extends Controller
{
    public function Armstype (){
        $armstype=Armstypes::paginate(5);
        return view ('backend.page.armstype.Armstype',compact('armstype'));
    }

    public function arms_view ($id){
        $armstype=Armstypes::find($id);
        // dd($armstype);
        return view('backend.page.armstype.type_view',compact('armstype'));
    }

    public function submit (){
        return view('backend.page.armstype.submit');
    }
    public function store(Request $request) {

        
        $request->validate([
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
        //  dd($request->all());
        Armstypes::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$fileName,
            
            
        
        ]);
        return to_route('Armstype')->with('msg','Data store Successfully');

    }

    public function edit($id){
        $armstype=Armstypes::find($id);
        return view('backend.page.armstype.edit_armstype',compact('armstype'));
    }

    public function update(Request $request,$id)
    {
        $armstype=Armstypes::find($id);
        
        $armstype->update([

            'name'=>$request->name,
            'description'=>$request->description,
            // 'image'=>$fileName
            'status'=>$request->status,

        ]);
        return to_route('Armstype');
    }

    public function delete($id){
        $armstype=Armstypes::find($id);

        $armstype->delete();
        return to_route('Armstype');
    }
}
