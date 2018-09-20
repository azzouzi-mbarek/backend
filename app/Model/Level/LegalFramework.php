<?php

namespace App\Model\Level;

use Illuminate\Database\Eloquent\Model;

class LegalFramework extends Model
{
    protected $fillable=[
        "name","url"
    ];
    public  function  Level(){
        return $this->belongsTo(Level::class);
    }
}
