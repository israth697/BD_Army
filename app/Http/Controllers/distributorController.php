<?php

namespace App\Http\Controllers;

use App\Models\Armstypes;
use App\Models\Distribution;
use App\Models\Stock;
use Illuminate\Http\Request;

class distributorController extends Controller
{
    public function distribution (){
        $distribution=Distribution::with('armstype')->paginate(5);
        return view ('backend.page.distribution.distribution',compact('distribution'));
    }

    public function distribution_view ($id){
        $distribution=Distribution::find($id);

        // dd($purchase);
        return view('backend.page.distribution.distribut_view',compact('distribution'));
    }

    public function divided (){
        $armstype=Armstypes::all();
        return view ('backend.page.distribution.divided',compact('armstype'));
    }

    public function storing(Request $request){
        // dd($request->all());
        $request->validate([
            'armstype_id'=>'required',
            'quantity'=>'required',
            'name'=>'required',
            'purpose'=>'required'
            
        ]);

        $check=

        $stock=Stock::where('armstype_id',$request->armstype_id)->first();
        if($stock->type_quantity>=$request->quantity)
        {
                // dd($request->all());
                Distribution::create([
                    // database column name=>$request->input field name
                    'armstype_id'=>$request->armstype_id,
                    'quantity'=>$request->quantity,
                    'name'=>$request->name,
                    'purpose'=>$request->purpose,
                    
        
                ]);
                return to_route('distribution.arms')->with('msg','Data store Successfully');
        }else{
            return to_route('distribution.arms')->with('msg','Stock Not Available.');
            
        }

    }

    public function edit($id){
        $distribution=Distribution::find($id);
        return view('backend.page.distribution.distribute_edit',compact('distribution'));
    }

    // public function update(Request $request,$id)
    // {
    //     //  dd($request->all());
    //     $distribution=Distribution::find($id);
        
    //     $distribution->update([

    //         'armstype_id'=>$request->armstype_id,
    //         'quantity'=>$request->quantity,
    //         'name'=>$request->name,
    //         'purpose'=>$request->purpose,
            
    //     ]);
    //     return to_route('distribution.arms');
    // }

    public function delete($id){
        $distribution=Distribution::find($id);

        $distribution->delete();
        return to_route('distribution.arms');
    }

}
