<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use App\Models\Rank;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function officer (){
        $officer=Officer::with('rank')->paginate(5);
        return view ('backend.page.officer.officer',compact('officer'));
    }

    public function officer_view($id){
        $officer=Officer::find($id);

        // dd($officer);
        return view('backend.page.officer.officer_view',compact('officer'));
    }

    public function fire (){
        $rank=Rank::all();
        return view ('backend.page.officer.fire',compact('rank'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'rank_id'=>'required',
            'firingnotice'=>'required',
        
        ]);
         //dd($request->all());
        Officer::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'rank_id'=>$request->rank_id,
            'firingnotice'=>$request->firingnotice,
            

        ]);
        return to_route('officer.permit')->with('msg','Data store Successfully');
    }

    public function delete($id){
        $officer=Officer::find($id);

        $officer->delete();
        return to_route('officer.permit');
    }
}
