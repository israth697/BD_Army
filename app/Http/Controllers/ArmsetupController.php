<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmsetupController extends Controller
{
    public function Armsetup (){
        $armsetup=Armsetup::all();
        return view ('backend.page.armsetup.Armsetup',compact('Armsetup'));
    
    }

    public function agree (){
        return view('backend.page.armsetup.agree');
        }
}
