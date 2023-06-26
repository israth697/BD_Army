<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchasedetailsController extends Controller
{
    public function purchasedetails (){
        return view ('backend.page.purchasedetails.purchasedetails');
    }
    public function purchaselist (){
        return view ('backend.page.purchasedetails.purchaselist');
    }
}
