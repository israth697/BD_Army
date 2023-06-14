<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function Purchase (){
        return view ('backend.page.Purchase');
    }
}
