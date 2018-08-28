<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public  function  Region(){
        return $this->belongsTo(Region::class);
    }

    public  function  Level(){
        return $this->hasMany(Level::class);
    }
}
