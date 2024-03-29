<?php

namespace App\Http\Controllers;

use App\Models\Armstypes;
use App\Models\Damagestock;
use App\Models\Stock;
use Illuminate\Http\Request;

class DamageController extends Controller
{
    public function damagestock (){
        $damagestock=Damagestock::with('armstype')->paginate(5);
        return view ('backend.page.damagestock.damagestock',compact('damagestock'));
    }

    public function damage_view ($id){
        $damagestock=Damagestock::find($id);
        // dd($rank);
        return view('backend.page.damagestock.damage_view',compact('damagestock'));
    }

    public function search (){
        $armstype=Armstypes::all();
        return view ('backend.page.damagestock.search',compact('armstype'));
    }
    public function store(Request $request){
        
        
        $request->validate([
            'armstype_id'=>'required',
            'quantity'=>'required',
            'reason'=>'required',
        ]);

        // step 1
        $stock=Stock::where('armstype_id',$request->armstype_id)->first();
        if($stock->type_quantity >= $request->quantity)
        {
            //yes

            $checkDS=Damagestock::where('armstype_id',$request->armstype_id)->first();
            if($checkDS){
                //yes
                $checkDS->increment('quantity',$request->quantity);
                $stock->decrement('type_quantity',$request->quantity);

            }else{
                //no
                Damagestock::create([
                    'armstype_id'=>$request->armstype_id,
                    'quantity'=>$request->quantity,
                    'reason'=>$request->reason

                ]);
                $stock->decrement('type_quantity',$request->quantity);

            }
        }else{
            // no
//stock not available
             return to_route('damage.stock');
        }

        //success
        return to_route('damage.stock');

          
         
        Damagestock::create([
            // database column name=>$request->input field name
            'armstype_id'=>$request->armstype_id,
            'quantity'=>$request->quantity,
            'reason'=>$request->reason,


        ]);
        return to_route('damage.stock')->with('msg','Data store Successfully');

    }

    // public function delete($id){
    //     $damagestock=Damagestock::find($id);

    //     $damagestock->delete();
    //     return to_route('damage.stock');
    // }

}
