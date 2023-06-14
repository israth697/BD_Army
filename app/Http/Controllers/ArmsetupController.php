<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmsetupController extends Controller
{
    public function Armsetup (){
        return view ('backend.page.Armsetup');
    }
}
