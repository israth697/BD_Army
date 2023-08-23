<?php

namespace App\Http\Controllers;


use App\Models\Armstypes;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function weapon (){
        $stock=Stock::paginate(5);
        return view ('backend.page.stock.stock',compact('stock'));
    }
           
    public function stock_view($id){
        $stock=Stock::find($id);
        // dd($rank);
        return view('backend.page.stock.stock_view',compact('stock'));
    }


    public function collection (){
        $armstype=Armstypes::all();
        
        return view ('backend.page.stock.collection',compact('armstype'));
    }

    public function store(Request $request){
       // dd($request->all());

    
        Stock::create([
            // database column name=>$request->input field name
            'armstype_id'=>$request->id,
            'type_quantity'=>$request->type_quantity,
            
            
        ]);
        return to_route('weapon.stock')->with('msg','Data store Successfully');

    }
    public function delete($id){
        $stock=Stock::find($id);

        $stock->delete();
        return to_route('weapon.stock');
    }

}
