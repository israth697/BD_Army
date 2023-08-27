<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function armstype () 
    {
       return $this->belongsTo(Armstypes::class,'armstype_id','id');
    }
}
