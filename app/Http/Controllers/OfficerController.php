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

    public function edit($id){
        $officer=Officer::find($id);
        return view('backend.page.officer.officer_edit',compact('officer'));
    }

    public function update(Request $request,$id)
    {
        $officer=Officer::find($id);
        // dd($rank);
        // dd($request->all());
        // $rank_image = $rank->image;

        // // dd(public_path('images/mechanics/'.$mechanic_image));
        // if ($image = $request->file('image')) {
        //     if (file_exists(public_path('uploads/'.$rank_image))) {
        //         // Log::useFiles('path', 'level');
        //         // File::delete($oldimage);

        //         File::delete(public_path('uploads/'.$rank_image));
        //     }
        //     $rank_image = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
        //     $image->move('uploads/', $rank_image);
        // }
        $officer->update([

            'name'=>$request->name,
            'email'=>$request->email,
            // 'rank_id'=>$request->rank_id,
            'firingnotice'=>$request->firingnotice,
            'status'=>$request->status,
            // 'image'=>$rank_image,
        ]);
        return to_route('officer.permit');
    }

    public function delete($id){
        $officer=Officer::find($id);

        $officer->delete();
        return to_route('officer.permit');
    }
}
