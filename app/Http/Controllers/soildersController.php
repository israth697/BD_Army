<?php

namespace App\Http\Controllers;

use App\Models\Soilder;
use Illuminate\Http\Request;



class soildersController extends Controller
{
    public function soilders (){
        $soilder=Soilder::all();
        return view ('backend.page.soilders.soilders',compact('soilder'));
    }

    public function create (){
    return view('backend.page.soilders.create');
    }
    public function store(Request $request){
        //  dd($request->all());
        Soilder::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'id_number'=>$request->id_number,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,

        ]);
        return to_route('soilders.list')->with('msg','Data store Successfully');

    }

    
}
