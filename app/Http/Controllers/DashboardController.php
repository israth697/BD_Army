<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard (){
    return view ('backend.page.dashboard.dashboard');
}

public function accept (){
    return view('backend.page.dashboard.accept');
    }

}
