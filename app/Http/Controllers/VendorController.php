<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor (){
        $vendor=Vendor::paginate(5);
        return view ('backend.page.vendor.vendor',compact('vendor'));
    }
    public function vendordetails (){
        return view ('backend.page.vendor.vendordetails');
    }
    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'id_number'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',
        ]); 
        //  dd($request->all());
        Vendor::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'id_number'=>$request->id_number,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->address,

        ]);
        return to_route('vendor.supply')->with('msg','Data store Successfully');

    }
}
