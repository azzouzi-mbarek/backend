<?php

namespace App\Model;

use App\Model\Level\Level;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public  function  Region(){
        return $this->belongsTo(Region::class);
    }

    public  function  Levels(){
        return $this->hasMany(Level::class);
    }
}
