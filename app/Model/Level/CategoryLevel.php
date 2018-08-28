<?php

namespace App\Model\Level;

use App\Model\Level;
use Illuminate\Database\Eloquent\Model;

class CategoryLevel extends Model
{
    public  function  Level(){
        return $this->hasMany(Level::class);
    }
}
