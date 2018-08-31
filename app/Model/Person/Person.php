<?php

namespace App\Model\Person;

use App\Model\Country;
use App\Model\Institution\Institution;
use App\Model\Level\Level;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public  function  Levels(){
        return $this->belongsToMany(Level::class);
    }

    public  function  Institutions(){
        return $this->belongsToMany(Institution::class);
    }
    public  function  Countries(){
        return $this->belongsToMany(Country::class);
    }

}
