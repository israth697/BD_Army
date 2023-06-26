<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor (){
        return view ('backend.page.vendor.vendor');
    }
    public function vendordetails (){
        return view ('backend.page.vendor.vendordetails');
    }
}
