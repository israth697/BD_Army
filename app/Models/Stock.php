<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function armstype () 
    {
       return $this->belongsTo(Armstypes::class,'armstype_id','id');
    }

    public function armsetup()
    {
        return $this->belongsTo(Armsetups::class,'armsetup_id','id');
    }
}
