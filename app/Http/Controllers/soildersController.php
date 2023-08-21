<?php

namespace App\Http\Controllers;

use App\Models\Soilder;
use App\Models\Rank;
use Faker\Core\File;
use Illuminate\Http\Request;



class soildersController extends Controller
{
    public function soilders (){
        $soilder=Soilder::with('rank')->paginate(5);
        return view ('backend.page.soilders.soilders',compact('soilder'));
    }
     
    public function soilders_view ($id){
        $soilder=Soilder::find($id);

        // dd($soilder);
        return view('backend.page.soilders.soilder_view',compact('soilder'));
    }

    public function create (){
        $rank=Rank::all();
    return view('backend.page.soilders.create',compact('rank'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'id_number'=>'required',
            'image'=>'required',
            'email'=>'required|email',
            'rank_id'=>'required',
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
        Soilder::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'id_number'=>$request->id_number,
            'image'=>$fileName,
            'email'=>$request->email,
            'rank_id'=>$request->rank_id,
            'corps'=>$request->corps,
            'contact'=>$request->contact,
            'address'=>$request->address,

        ]);
        return to_route('soilders.list')->with('msg','Data store Successfully');

    }
    public function edit($id){
        $soilder=Soilder::find($id);
        return view('backend.page.soilders.soilder_edit',compact('soilder'));
    }

    // public function update(Request $request,$id)
    // {
    //     $soilder=Soilder::find($id);
    //     // dd($rank);
    //     // dd($request->all());
    //     $soilder_image = $soilder->image;

    //     // dd(public_path('images/mechanics/'.$mechanic_image));
    //     if ($image = $request->file('image')) {
    //         if (file_exists(public_path('uploads/'.$soilder_image))) {
    //             // Log::useFiles('path', 'level');
    //             // File::delete($oldimage);

                
    //             File::delete(public_path('uploads/'.$soilder_image));
    //         }
    //         $rank_image = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
    //         $image->move('uploads/', $rank_image);
    //     }
    //     $soilder->update([

    //         'name'=>$request->name,
    //         'status'=>$request->status,
    //         'image'=>$rank_image,
    //     ]);
    //     return to_route('soilders.list');
    // }
    public function delete($id){
        $soilder=Soilder::find($id);

        $soilder->delete();
        return to_route('soilders.list');
    }
  
    
}
