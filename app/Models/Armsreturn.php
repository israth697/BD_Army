<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armsreturn extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function armstype () 
    {
       return $this->belongsTo(Armstypes::class,'armstype_id','id');
    }

    public function rank () 
    {
       return $this->belongsTo(Rank::class,'rank_id','id');
    }
}
