<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DamageController extends Controller
{
    public function damagestock (){
        return view ('backend.page.damagestock.damagestock');
    }
    public function search (){
        return view ('backend.page.damagestock.search');
    }
}
