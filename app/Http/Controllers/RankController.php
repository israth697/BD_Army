<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;

class RankController extends Controller{

    public function rank()
    {
        $rank=Rank::paginate(5);
        return view ('backend.page.rank.rank',compact('rank'));
    }

    public function post (){
    return view('backend.page.rank.post');
    }
    
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);
        //  dd($request->all());
        $fileName = null;
        if($request->hasFile('image'))

        {
            $fileName =date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        
        Rank::create([
            // database column name=>$request->input field name
            'image'=>$fileName,
            'name'=>$request->name,

        ]);
        return to_route('rank.list')->with('msg','Data store Successfully');

    }
}