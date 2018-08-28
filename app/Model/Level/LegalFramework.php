<?php

namespace App\Model\Level;

use Illuminate\Database\Eloquent\Model;

class LegalFramework extends Model
{
    public  function  Level(){
        return $this->belongsTo(Level::class);
    }
}
