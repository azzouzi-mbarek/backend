<?php

namespace App\Model\Level;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable =[
        "name"
    ];
    public  function  Level(){
        return $this->belongsTo(Level::class);
    }
}
