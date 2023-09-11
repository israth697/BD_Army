<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Soilder;
use Illuminate\Http\Request;

class soildercontroller extends Controller
{
    public function getsoilders(){
        $soilder=Soilder::all();

        return response()->json([
            'success'=>true,
            'data'=>$soilder,
            'message'=>'All soilder list',
            'status_code'=>200
        ]);
    }
}
