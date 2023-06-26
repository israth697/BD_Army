<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmsetupController extends Controller
{
    public function Armsetup (){
        return view ('backend.page.armsetup.Armsetup');
    }

    public function agree (){
        return view('backend.page.armsetup.agree');
        }
}
