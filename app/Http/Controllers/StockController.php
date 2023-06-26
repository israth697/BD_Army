<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function weapon (){
        return view ('backend.page.stock.stock');
    }

    public function collection (){
        return view ('backend.page.stock.collection');
    }
}
