<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function rank () 
    {
       return $this->belongsTo(Rank::class,'rank_id','id');
    }
}
