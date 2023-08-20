<?php

namespace App\Http\Controllers;

use App\Models\Armsetups;
use App\Models\Armstypes;
use App\Models\Damagestock;
use App\Models\Officer;
use App\Models\Purchase;
use App\Models\Rank;
use App\Models\Soilder;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    
    public function dashboard (){
        $armsetup=Armsetups::all()->count();
        $armstype=Armstypes::all()->count();
        $damagestock=Damagestock::all()->count();
        $officer=Officer::all()->count();
        $purchase=Purchase::all()->count();
        $rank=Rank::all()->count();
        $soilder=Soilder::all()->count();

    return view ('backend.page.dashboard.dashboard',compact('armsetup','armstype','damagestock','officer','purchase','rank','soilder'));
}

// public function accept (){
//     return view('backend.page.dashboard.accept');
//     }

}
