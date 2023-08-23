<?php

namespace App\Http\Controllers;

use App\Models\Armstypes;
use App\Models\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class 
RankController extends Controller{

    public function rank()
    {
        $rank=Rank::with('armstype')->paginate(5);
        return view ('backend.page.rank.rankM',compact('rank'));
    }
    
    public function rank_view($id){
        $rank=Rank::find($id);
        // dd($rank);
        return view('backend.page.rank.rank_view',compact('rank'));
    }

    public function post (){
        $armstype=Armstypes::all();
    //     return view ('backend.page.damagestock.search',compact('armstype'));
    // return view('backend.page.rank.post');
        return view('backend.page.rank.post',compact('armstype'));
    }
    
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'armstype_id'=>'required',
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
            
            'armstype_id'=>$request->armstype_id,

        ]);
        return to_route('rank.list')->with('msg','Data store Successfully');

    }

    public function edit($id){
        $rank=Rank::find($id);
        return view('backend.page.rank.rank_edit',compact('rank'));
    }

    public function update(Request $request,$id)
    {
        $rank=Rank::find($id);
        // dd($rank);
        // dd($request->all());
        $rank_image = $rank->image;

        // dd(public_path('images/mechanics/'.$mechanic_image));
        if ($image = $request->file('image')) {
            if (file_exists(public_path('uploads/'.$rank_image))) {
                // Log::useFiles('path', 'level');
                // File::delete($oldimage);

                File::delete(public_path('uploads/'.$rank_image));
            }
            $rank_image = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/', $rank_image);
        }
        $rank->update([

            'name'=>$request->name,
            'status'=>$request->status,
            'image'=>$rank_image,
        ]);
        return to_route('rank.list');
    }
    public function delete($id){
        $rank=Rank::find($id);

        $rank->delete();
        return to_route('rank.list');
    }

}