<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankController extends Controller
{
    public function rank (){
        return view ('backend.page.rank.rank');
    }

    public function post (){
        return view ('backend.page.rank.post');
    }
}
