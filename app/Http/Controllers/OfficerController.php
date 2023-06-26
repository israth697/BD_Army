<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function officer (){
        return view ('backend.page.officer.officer');
    }

    public function fire (){
        return view ('backend.page.officer.fire');
    }
}
