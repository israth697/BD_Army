<?php

namespace App\Http\Controllers;

use App\Models\Soilder;
use Illuminate\Http\Request;



class soildersController extends Controller
{
    public function soilders (){
        $soilder=Soilder::paginate(5);
        return view ('backend.page.soilders.soilders',compact('soilder'));
    }

    public function create (){
    return view('backend.page.soilders.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'id_number'=>'required',
            'image'=>'required',
            'email'=>'required|email',
            'corps'=>'required',
            'contact'=>'required',
            'address'=>'required',
        ]);     
        $fileName = null;
        if($request->hasFile('image'))

        {
            $fileName =date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }   
        //  dd($request->all());
        Soilder::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'id_number'=>$request->id_number,
            'image'=>$fileName,
            'email'=>$request->email,
            'corps'=>$request->corps,
            'contact'=>$request->contact,
            'address'=>$request->address,

        ]);
        return to_route('soilders.list')->with('msg','Data store Successfully');

    }

    
}
