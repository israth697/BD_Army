<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function weapon (){
        $stock=Stock::paginate(5);
        return view ('backend.page.stock.stock',compact('stock'));
    }

    public function collection (){
        return view ('backend.page.stock.collection');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'id_number'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',
        ]);        
        //  dd($request->all());
        Stock::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'id_number'=>$request->id_number,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,

        ]);
        return to_route('weapon.stock')->with('msg','Data store Successfully');

    }

}
