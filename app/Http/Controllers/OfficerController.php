<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function officer (){
        $officer=Officer::paginate(5);
        return view ('backend.page.officer.officer',compact('officer'));
    }

    public function fire (){
        return view ('backend.page.officer.fire');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'firingnotice'=>'required',
        
        ]);
       // dd($request->all());
        Officer::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'firingnotice'=>$request->firingnotice,
            

        ]);
        return to_route('officer.permit')->with('msg','Data store Successfully');

    }
}
