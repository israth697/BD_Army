<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class soildersController extends Controller
{
    public function soilders (){
        return view ('backend.page.soilders.soilders');
    }

    public function create (){
    return view('backend.page.soilders.create');
    }

    
}
