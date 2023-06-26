<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmstypeController extends Controller
{
    public function Armstype (){
        return view ('backend.page.armstype.Armstype');
    }
    public function submit (){
        return view('backend.page.armstype.submit');
        }
}
