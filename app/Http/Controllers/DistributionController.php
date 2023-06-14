<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function distribution (){
        return view ('backend.page.distribution');
    }
}
